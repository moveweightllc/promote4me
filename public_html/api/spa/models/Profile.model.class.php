<?php

namespace Promote4Me;

/**
 * Represents a user profile
 */
class Profile
{
    public string | null $avatarUrl;
    public string | null $emailAddress;
    public string | null $firstName;
    public string $googleId;
    public string | null $lastName;
    public string | null $phoneNumber;
    public array | null $relationships;
    public int | null $subscriberId;
    public string | null $subscriberName;
    public int | null $userId;
    public string | null $username;
    public string | null $userType;

    public function __construct(
        string $google_id,
        string | null $avatar_url = null,
        string | null $email_address = null,
        string | null $first_name = null,
        string | null $last_name = null,
        string | null $phone_number = null,
        array | null $relationships = [],
        int | null $subscriber_id = null,
        string | null $subscriber_name = '',
        int | null $user_id = null,
        string | null $username = '',
        string | null $user_type = null,
    ) {
        $this->avatarUrl = $avatar_url;
        $this->emailAddress = $email_address;
        $this->firstName = $first_name;
        $this->googleId = $google_id;
        $this->lastName = $last_name;
        $this->phoneNumber = $phone_number;
        $this->relationships = $relationships;
        $this->subscriberId = $subscriber_id;
        $this->subscriberName = $subscriber_name;
        $this->userId = $user_id;
        $this->username = $username;
        $this->userType = $user_type;
    }

    public function __serialize(): array
    {
        return [
            'avatarUrl' => $this->avatarUrl,
            'emailAddress' => $this->emailAddress,
            'firstName' => $this->firstName,
            'googleId' => $this->googleId,
            'lastName' => $this->lastName,
            'phoneNumber' => $this->phoneNumber,
            'relationships' => $this->relationships,
            'subscriberId' => $this->subscriberId,
            'subscriberName' => $this->subscriberName,
            'userId' => $this->userId,
            'username' => $this->username,
            'userType' => $this->userType,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->avatarUrl = $data['avatarUrl'];
        $this->emailAddress = $data['emailAddress'];
        $this->firstName = $data['firstName'];
        $this->googleId = $data['googleId'];
        $this->lastName = $data['lastName'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->relationships = $data['relationships'];
        $this->subscriberId = $data['subscriberId'];
        $this->subscriberName = $data['subscriberName'];
        $this->userId = $data['userId'];
        $this->username = $data['username'];
        $this->userType = $data['userType'];
    }

    /**
     * This method populates most of the fields within the profile
     * using data returned from the DB
     *
     * @param array $user Data from the DB
     */
    public function populate(array $user)
    {
        $this->avatarUrl = $user['avatar_url'];
        $this->emailAddress = $user['email_address'];
        $this->firstName = $user['first_name'];
        $this->lastName = $user['last_name'];
        $this->phoneNumber = $user['phone_number'];
        $this->subscriberId = $user['subscriber_id'];
        $this->subscriberName = $user['subscriber_name'];
        $this->username = $user['username'];
        $this->userType = $user['user_type'];
    }
}
