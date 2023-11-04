<?php
function setMenu(){
$publicmenu = array(
    [
        'title' => '',
        'pagetitle' => 'Rajeev',
        'url' => '/',
        'icon' => 'iconsminds-check',
    ],
    [
        'title' => '',
        'pagetitle' => 'Rajeev',
        'url' => '/',
        'icon' => 'iconsminds-check',
    ],
    [
        'title' => '',
        'pagetitle' => 'Rajeev',
        'url' => '/',
        'icon' => 'iconsminds-check',
    ],
    [
        'title' => '',
        'pagetitle' => 'Rajeev',
        'url' => '/',
        'icon' => 'iconsminds-check',
    ],
    [
        'title' => '',
        'pagetitle' => 'Rajeev',
        'url' => '/',
        'icon' => 'iconsminds-check',
    ],
    [
        'title' => '',
        'pagetitle' => 'Rajeev',
        'url' => '/',
        'icon' => 'iconsminds-check',
    ],
    [
        'title' => '',
        'pagetitle' => 'Rajeev',
        'url' => '/',
        'icon' => 'iconsminds-check',
    ],
    [
        'title' => '',
        'pagetitle' => 'Rajeev',
        'url' => '/',
        'icon' => 'iconsminds-check',
    ],
    [
        'title' => '',
        'pagetitle' => 'Rajeev',
        'url' => '/',
        'icon' => 'iconsminds-check',
    ],
    [
        'title' => 'EDUCATION',
        'pagetitle' => 'Rajeev | Education',
        'url' => '/education',
        'icon' => 'iconsminds-check',
    ],
    [
        'title' => 'SKILLS',
        'pagetitle' => 'Rajeev | Skills',
        'url' => '/skills',
        'icon' => 'iconsminds-business-mens',
    ],
    [
        'title' => 'EXPERIENCE',
        'pagetitle' => 'Rajeev | Experience',
        'url' => '/experience',
        'icon' => 'iconsminds-business-mens',
    ],
    [
        'title' => 'PROJECTS',
        'pagetitle' => 'Rajeev | Projects',
        'url' => '/projects',
        'icon' => 'iconsminds-business-mens',
    ],
    [
        'title' => 'ABOUT',
        'pagetitle' => 'Rajeev | About',
        'url' => '/about',
        'icon' => 'iconsminds-business-mens',
    ],
    [
        'title' => 'PROFILE',
        'pagetitle' => 'Rajeev | Profile',
        'url' => '/profile',
        'icon' => 'iconsminds-business-mens',
    ],
    [
        'title' => 'CONTACT',
        'pagetitle' => 'Rajeev | Contact',
        'url' => '/contact',
        'icon' => 'iconsminds-business-mens',
    ]
);

    $menucode = '<class="navbar navbar-default bootsnav navbar-fixed dark no-background" id="navbar-menu">';
    $menucode .= '<ul>';
    foreach ($publicmenu as $menuitem) {
        $active = '';
        if($menuitem['url'] == $_SESSION['config']->Request_URI) {
            $active = 'active';
            $_SESSION['PageTitle'] = $menuitem['pagetitle'];
            $_SESSION['PageURI'] = $menuitem['url'];
        }
        $menucode .= '<li><a href="'. $menuitem['url'].'" class="'. $active .'">'.$menuitem['title'].'</a></li>';
    }
    $menucode .= '</ul>';   
    $menucode .= '</nav>';
    return $menucode;
}
?>