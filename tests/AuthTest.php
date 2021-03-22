<?php
use App\Table\UserTable;
use PHPUnit\Framework\TestCase;

final class AuthTest extends TestCase {  
    
    /**
     * @var Auth
     */
    private $auth;
    
    /**
     *
     * @var $_SESSION
     */
    private $session = [];
    
    /**
     * @before 
     */
    public function setAuth()
    {
        $pdo = new PDO("sqlite::memory:", null, null, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION            
        ]);
        $pdo->query('CREATE TABLE users_b (id INTEGER, username TEXT, password TEXT, role TEXT)');
        for($i = 1;$i <= 10;$i++) {
            $password = password_hash("user$i", PASSWORD_BCRYPT);
            $pdo->query("INSERT INTO users_b (id, username, password, role) VALUES($i, 'user$i', '$password', 'user$i')");
        }
        $this->auth = new UserTable($pdo, $this->session);
    }

    public function testLoginWithBadUsername()
    {
        $this->assertNull($this->auth->login('aze', 'aze'));
    }

    public function testLoginWithBadPassword()
    {
        $this->assertNull($this->auth->login('user1', 'aze'));
    }

    public function testLoginSuccess()
    {
        $this->assertObjectHasAttribute("username", $this->auth->login('user1', 'user1'));
        $this->assertEquals(1, $this->session['auth']);
    }

    public function testUserWhenNotConnected()
    {
        $this->assertNull($this->auth->user());
    }

    public function testUserWhenNotConnectedWithUnexistingUser()
    {
        $this->session['auth'] = 11;
        $this->assertNull($this->auth->user());
    }

    public function testUserWhenConnected()
    {
        $this->session['auth'] = 4;
        $user = $this->auth->user();
        $this->assertIsObject($user);
        $this->assertEquals('user4', $user->getUsername());
    }

    public function testRequireRole()
    {
        $this->session['auth'] = 2;
        $this->auth->requireRole('user2');
        $this->expectNotToPerformAssertions();
    }

    public function testRequireRoleThrowException () 
    {
        $this->expectException(App\Exception\ForbiddenException::class);
        $this->session['auth'] = 2;
        $this->auth->requireRole('user3');
    }

    public function testRequireRoleWithoutLogin () 
    {
        $this->expectException(App\Exception\ForbiddenException::class);
        $this->auth->requireRole('user3');
    }
}