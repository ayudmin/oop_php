<?php 



class MaximunMembersReached extends Exception

{
    protected $message = 'You may not add more than 3 members';


}
class Member 

{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


}

class Team

{

    protected $members = [];

    public function add(Member $member)

    {
        if (count($this->members) === 3){

            throw new MaximunMembersReached;
        }

        $this->members[] = $member;
    }


    public function members()

    {
        return $this->members;
    }
}


class TeamMembersController

{

    public function store()
    {
        $team = new Team;

    try {

        $team->add(new Member('Joe Doe'));
        $team->add(new Member('Pita Doe'));
        $team->add(new Member('Frank Doe'));
        $team->add(new Member('Lee Doe'));

        var_dump($team->members());
    } catch (MaximunMembersReached $e) {

        var_dump($e->getMessage());
    }

    }
}

(new TeamMembersController)->store();


