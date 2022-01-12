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

class CounterItem {
    public $value;
    public $label;
    public $iconClass;
    public $isActive;
    public function __construct($options)
    {
        $this->value = $options['value'];
        $this->label = $options['label'];
        $this->iconClass = $options['iconClass'];
        $this->isActive = $options['isActive'];
    }

    public static function getCounters () {
        $counters = array(
            new CounterItem(array(
                'label' => 'Facebook Friends',
                'value' => 233,
                'iconClass' => 'fa fa-facebook',
                'isActive' => true
            )),
            new CounterItem(
                array(
                    'label' => 'In Mailing List',
                    'value' => 459,
                    'iconClass'  => 'fa fa-envelope-o',
                    'isActive' => true
                )),
            new CounterItem(
                array(
                    'label' => 'Instagram Followers',
                    'value' => 186,
                    'iconClass' => 'fa fa-instagram',
                    'isActive' => true
                )
            ),
            new CounterItem(array(
                'label' => 'Smiles Created',
                'iconClass' => 'ti-face-smile',
                'value' => 14493,
                'isActive' => false
            )),
            new CounterItem(array(
                'label' => 'Events',
                'iconClass' => 'fa fa-calendar',
                'value' => 26,
                'isActive' => true
            ))
        );
        return array_filter($counters, function ($counterItem) {
            return $counterItem->isActive;
        });
    }
}

class ClubEvent
{
    public $title;
    public $subtitle;
    public $titleAbbrev;
    public $largeImage;
    public $smallImage;

    public function __construct($options)
    {
        $this->title = $options['title'];
        $this->subtitle = $options['subtitle'];
        $this->titleAbbrev = $options['titleAbbrev'];
        $this->largeImage = $options['largeImage'];
        $this->smallImage = $options['smallImage'];
    }

    public static function getClubEvents()
    {
        return array(
            new ClubEvent(array(
                'title' => 'All Ivy+ Ugly Sweater Party 2021',
                'titleAbbrev' => '2021 Ugly Sweater Party',
                'subtitle' => 'It\'s been so long!',
                'largeImage' => 'images/events/large/ugly-sweater-2021.jpg',
                'smallImage' => 'images/events/large/ugly-sweater-2021.jpg',
            )),
            new ClubEvent(array(
                'title' => 'Brunonians Get 🌶️: Miami Spice with Us!',
                'titleAbbrev' => 'Miami Spice Dinner',
                'subtitle' => '@ Il Mulino, Gustave, & Zucca',
                'date' => '09/18/2021',
                'largeImage' => 'images/events/large/miami-spice.jpg',
                'smallImage' => 'images/events/large/miami-spice.jpg',
            )),
            new ClubEvent(array(
                'title' => '“Science and Anti Science in America (and Florida!) Today” with Prof. Kenneth Miller',
                'titleAbbrev' => 'Ken Miller Talk',
                'subtitle' => 'Discussing Anti-Science Thinking',
                'date' => '11/30/2018',
                'largeImage' => 'images/events/large/ken-miller.jpg',
                'smallImage' => 'images/events/large/ken-miller.jpg',
            )),
            new ClubEvent(array(
                'title' => 'Escape Room Night at Fox in a Box',
                'titleAbbrev' => 'Escape Room',
                'subtitle' => 'We survived!',
                'date' => '09/28/2018',
                'largeImage' => 'images/events/large/escape-room.jpg',
                'smallImage' => 'images/events/large/escape-room.jpg',
            )),
            new ClubEvent(array(
                'title' => 'Welcome Reception to the Class of 2020',
                'titleAbbrev' => 'Class of 2020 Party',
                'subtitle' => 'Hosted by Laurie Stein',
                'largeImage' => 'images/events/large/2020-students-reception.jpg',
                'smallImage' => 'images/events/small/2020-students-reception.jpg',
            )),
            new ClubEvent(array(
                'title' => 'Breaking Through Careers at Miami Country Day School',
                'titleAbbrev' => 'Career Day',
                'subtitle' => 'Introducing careers to kids',
                'largeImage' => 'images/events/large/breaking-careers.jpg',
                'smallImage' => 'images/events/small/breaking-careers.jpg',
            )),
            new ClubEvent(array(
                'title' => 'Salsa Night with BULAC at the Yuca Cuban Restaurant',
                'titleAbbrev' => 'Salsa Workshop',
                'subtitle' => 'With the help of BULAC',
                'largeImage' => 'images/events/large/salsa-bulac.jpg',
                'smallImage' => 'images/events/small/salsa-bulac.jpg',
            )),
            new ClubEvent(array(
                'title' => 'All Ivy+ Happy Hour at the Wynwood Yard',
                'titleAbbrev' => 'Happy Hour',
                'subtitle' => 'At the lovely Wynwood Yard',
                'largeImage' => 'images/events/large/wynwood-yard.jpg',
                'smallImage' => 'images/events/small/wynwood-yard.jpg',
            )),

            new ClubEvent(array(
                'title' => 'African Dance Class at the Little Haiti Cultural Center',
                'titleAbbrev' => 'African Dance Class',
                'subtitle' => 'Little Haiti Cultural Center',
                'largeImage' => 'images/events/large/haiti-culture-dance.jpg',
                'smallImage' => 'images/events/small/haiti-culture-dance.jpg',
            )),
            new ClubEvent(array(
                'title' => 'Ugly Sweater Party',
                'titleAbbrev' => 'Ugly Sweater Party',
                'subtitle' => 'Our popular All Ivy+ Event',
                'largeImage' => 'images/events/large/ugly-sweater.jpg',
                'smallImage' => 'images/events/small/ugly-sweater.jpg',
            )),
            new ClubEvent(array(
                'title' => 'Danny Glass showcases his artwork at Art Basel',
                'titleAbbrev' => 'Art Basel Showcase',
                'subtitle' => 'Led by Danny Glass',
                'largeImage' => 'images/events/large/danny-glass.jpg',
                'smallImage' => 'images/events/small/danny-glass.jpg',
            )),
            new ClubEvent(array(
                'title' => 'Dinner with Brown Advancement',
                'titleAbbrev' => 'Dinner w/ Brown',
                'subtitle' => 'and their Advancement Office',
                'largeImage' => 'images/events/large/dinner-advancement.jpg',
                'smallImage' => 'images/events/small/dinner-advancement.jpg',
            )),
//            new ClubEvent(array(
//                'title' => '',
//                'titleAbbrev' => '',
//                'subtitle' => '',
//                'largeImage' => '',
//                'smallImage' => '',
//            )),
        );
    }
}