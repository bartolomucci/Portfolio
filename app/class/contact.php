<?php

class Contact
{
    private string $email;

    private string $telephone;

    private string $contact_reason;

    private string $verification;

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of contact_reason
     */ 
    public function getContact_reason()
    {
        return $this->contact_reason;
    }

    /**
     * Set the value of contact_reason
     *
     * @return  self
     */ 
    public function setContact_reason($contact_reason)
    {
        $this->contact_reason = $contact_reason;

        return $this;
    }

    /**
     * Get the value of verification
     */ 
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Set the value of verification
     *
     * @return  self
     */ 
    public function setVerification($verification)
    {
        $this->verification = $verification;

        return $this;
    }
}