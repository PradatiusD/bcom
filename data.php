<?php

class TeamMember {
    public $name;
    public $classYear;
    public $title;
    public $socialProfileBrands = array(
        'linkedin',
        'instagram',
        'facebook',
        'twitter'
    );
    public $linkedin;
    public $instagram;
    public $facebook;
    public $twitter;

    public $image;
    public $isActive;
    public $isExecutiveOfficer;

    public function __construct($options)
    {
        $this->name = $options['name'];
        $this->classYear = $options['classYear'];
        $imagesDirectory = 'images/team/';
        $this->image = $imagesDirectory . (isset($options['image']) ? $options['image'] : 'fallback.jpg');

        $this->title = isset($options['title']) ? $options['title'] : 'Committee Member';

        // Social profiles
        foreach ($this->socialProfileBrands as $socialBrand) {
            if (isset($options[$socialBrand])) {
                $this->{$socialBrand} = $options[$socialBrand];
            }
        }

        $this->isActive = $options['isActive'];
        $this->isExecutiveOfficer = $options['isExecutiveOfficer'];
    }

    public function renderBoardMemberHTML ($delay) {
        ?>
        <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="<?php echo $delay;?>s">
            <div class="item-wrap">
                <div class="item"><img src="<?php echo $this->image?>" class="fill" alt="<?php echo $this->name . ' ' . $this->title;?>">
                    <div class="caption">
                        <div class="social-link">
                            <?php foreach ($this->socialProfileBrands as $socialProfile):
                                if (!isset($this->{$socialProfile})) {
                                    continue;
                                }
                                $profile_url = $this->{$socialProfile}
                                ?>
                                <a href="<?php echo $profile_url?>" rel="nofollow" target="_blank"><i class="fa fa-<?php echo $socialProfile;?>"></i></a>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <h4><?php echo $this->name . ' \'' . substr($this->classYear, -2);?></h4>
            <?php if (isset($this->title)):?>
                <span class="designation"><?php echo $this->title;?></span>
            <?php endif;?>
        </div>

        <?php
    }

    static function getBoardMembers () {
        $members = array(
            new TeamMember(array(
                'name' => 'Matthew Ricci',
                'classYear' => 1990,
                'title' => 'Brown Book Award Chair',
                'image' => 'matthew.jpg',
                'linkedin' => 'https://www.linkedin.com/in/matthewricci/',
                'isExecutiveOfficer' => false,
                'isActive' => false
            )),
            new TeamMember(array(
                'name' => 'Evan Oster',
                'classYear' => 1982,
                'title' => 'Co-President',
                'image' => 'evan.jpg',
                'linkedin' => 'https://www.linkedin.com/in/evanoster/',
                'isExecutiveOfficer' => true,
                'isActive' => true
            )),
            new TeamMember(array(
                'name' => 'Samantha Phillips',
                'classYear' => 1990,
                'title' => 'Community Service Chair',
                'image' => 'sam.jpg',
                'isExecutiveOfficer' => false,
                'isActive' => false
            )),
            new TeamMember(array(
                'name' => 'Peter Lees',
                'classYear' => 1991,
                'title' => 'Communications Chair',
                'image' => 'peter.jpg',
                'linkedin' => 'https://www.linkedin.com/in/peter-a-lees-924792/',
                'isExecutiveOfficer' => false,
                'isActive' => false
            )),
            new TeamMember(array(
                'name' => 'Rosalie Berg',
                'classYear' => 1993,
                'title' => 'Social Co-chair',
                'image' => 'rosalie.jpg',
                'linkedin' => 'https://www.linkedin.com/in/rosalieberg',
                'isExecutiveOfficer' => false,
                'isActive' => false
            )),
            new TeamMember(array(
                'name' => 'Cody Simmons',
                'classYear' => 2010,
                'title' => 'Social Co-chair',
                'image' => 'cody.jpg',
                'linkedin' => 'https://www.linkedin.com/in/codyvsimmons',
                'isExecutiveOfficer' => false,
                'isActive' => false
            )),
            new TeamMember(array(
                'name' => 'Jonathan Kim',
                'classYear' => 1988,
                'title' => 'Committee Member',
                'image' => 'jonathan.jpg',
                'linkedin' => 'https://www.linkedin.com/in/jonathankim/',
                'isExecutiveOfficer' => false,
                'isActive' => true
            )),
            new TeamMember(array(
                'name' => 'Kimberly Arredondo',
                'classYear' => 2011,
                'image' => 'kimberly.jpg',
                'linkedin' => 'https://www.linkedin.com/in/kimberly-arredondo-ba614651/',
                'instagram' => 'https://www.instagram.com/hellokimmo11/',
                'isExecutiveOfficer' => false,
                'isActive' => true
            )),
            new TeamMember(array(
                'name' => 'Daniel Prada',
                'classYear' => 2012,
                'title' => 'Co-President',
                'image' => 'daniel.jpg',
                'linkedin' => 'https://www.linkedin.com/in/danielprada/',
                'instagram' => 'https://www.instagram.com/PradatiusD/',
                'twitter' => 'https://twitter.com/PradatiusD',
                'facebook' => 'https://www.facebook.com/PradatiusD',
                'isExecutiveOfficer' => true,
                'isActive' => true
            )),

            new TeamMember(array(
                'name' => 'Maria Gabriela Pelaez Romer',
                'image' => 'maria.jpg',
                'classYear' => 2004,
                'title' => 'Social Chair',
                'linkedin' => 'https://www.linkedin.com/in/mgpelaez/',
                'isExecutiveOfficer' => true,
                'isActive' => true
            )),

            new TeamMember(array(
                'name' => 'Porpoise Evans',
                'image' => 'porpoise.jpg',
                'classYear' => 1994,
                'title' => 'Secretary',
                'linkedin' => 'https://www.linkedin.com/in/porpoiseevansesq/',
                'isExecutiveOfficer' => true,
                'isActive' => true
            )),

            new TeamMember(array(
                'name' => 'Aaron "Shuo" Yang',
                'classYear' => 1994,
                'image' => 'aaron.jpg',
                'instagram' => 'https://www.instagram.com/aaronsyang/',
                'isExecutiveOfficer' => false,
                'isActive' => true
            )),

            new TeamMember(array(
                'name' => 'Adaeze Nwakobi',
                'classYear' => 2014,
                'linkedin' => 'https://www.linkedin.com/in/adaezenwakobi/',
                'isExecutiveOfficer' => false,
                'isActive' => true
            )),

            new TeamMember(array(
                'name' => 'Leland Lazarus',
                'classYear' => 2012,
                'image' => 'leland.jpg',
                'instagram' => 'https://www.linkedin.com/in/leland-lazarus-b2533a27/',
                'isExecutiveOfficer' => false,
                'isActive' => true
            )),

            new TeamMember(array(
                'name' => 'Irv Lustig',
                'classYear' => 1983,
                'title' => 'Treasurer',
                'image' => 'irv.jpg',
                'linkedin' => 'https://www.linkedin.com/in/irv-lustig-6045123/',
                'isExecutiveOfficer' => true,
                'isActive' => true
            ))
        );
        return array_filter($members, function ($member) {
            return $member->isActive;
        });
    }
}