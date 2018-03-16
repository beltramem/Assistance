<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
	 * @ORM\Column(type="text", length=255)
	 */
	private $username;
	
	/**
	 * @ORM\Column(type="text", length=255)
	 */
	 
	private $email;
	
	/**
	 * @ORM\Column(type="text", length=255)
	 */
	
	private $password;
	
	/**
     * @var array
     *
     * @ORM\Column(name="roles", type="json_array")
     */
	
	private $roles= ["ROLE_USER"];
	
	private $plainPassword;
	
	public function getId()
	  {
		return $this->id;
	  }	
	public function getUsername()
	  {
		return $this->usernamename;
	  }
	public function getEmail()
	{
		return $this->email;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function getRoles()
	{
		return $this->roles;
	}
	public function getPlainPassword()
	{
		return $this->plainPassword;
	}
	
    public function setUsername($pName)
	{
		$this->username=$pName;
	}    
	public function setEmail($pEmail)
	{
		$this->email=$pName;
	}
	public function setPassword($pPassword)
	{
		$this->password=$pPassword;
	}	
	public function setRoles($pRoles)
	{
		$this->roles=$pRoles;
	}
	public function setPlainPassword($pPlainPassword)
	{
		$this->plainPassword=$pPlainPassword;
	}
	
	public function addRole($role) {
        $this->roles[] = $role;
    }
	
    public function removeRole($role) {
        $index = array_search($role, $this->roles, true);
        if ($index !== false) {
            array_splice($this->roles, $index, 1);
        }
    }
	
	public function eraseCredentials(){
		$this->plainPassword=null;
	}
	
	    public function getSalt()
    {
        // The bcrypt and argon2i algorithms don't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    } 
}
