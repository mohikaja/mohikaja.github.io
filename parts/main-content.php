<?php
$links = array(
    array(
        'url' => 'mailto:tama.wmp@gmail.com',
        'icon' => 'far fa-envelope',
        'label' => 'tama.wmp@gmail.com',
    ),
    array(
        'url' => 'www.linkedin.com/in/widia-maulana-pratama-211066286',
        'icon' => 'fab fa-linkedin',
        'label' => 'Widia Maulana Pratama',
    ),
    array(
        'url' => 'tel:+6282120482225',
        'icon' => 'fab fa-whatsapp',
        'label' => '+6282120482225',
    ),
    array(
        'url' => 'https://www.instagram.com/_yhp25/',
        'icon' => 'fab fa-instagram',
        'label' => '_yhp25',
    ),
);
$projects = array(
    array(
        'url' => 'https://credencehtx.com/',
        'thumbnail' => './assets/images/crd.png',
        'name' => 'Credence',
    ),
    array(
        'url' => 'https://www.mpc.id/',
        'thumbnail' => './assets/images/mpc.png',
        'name' => 'MPC',
    ),
    array(
        'url' => 'https://socialbulldog.com/',
        'thumbnail' => './assets/images/sbu.png',
        'name' => 'Social Bulldog',
    ),
    array(
        'url' => 'https://www.daily-joy.org/',
        'thumbnail' => './assets/images/dj.png',
        'name' => 'Daily Joy',
    ),
    array(
        'url' => 'https://southernsmoke.org/',
        'thumbnail' => './assets/images/ssm.png',
        'name' => 'Southern Smoke Foundation',
    ),
    array(
        'url' => 'https://centennial.houstonzoo.org/',
        'thumbnail' => './assets/images/hzo.png',
        'name' => 'Houston Zoo',
    ),
    array(
        'url' => 'https://shaunleonardo.com/',
        'thumbnail' => './assets/images/sha.png',
        'name' => 'Shaun Leonardo',
    ),
);
?>

<div class="main-content">
    <div class="grid-x align-center">
        <div class="cell medium-8 text-center">
            <img src="./assets/images/photo.jpg" class="thumbnail-photo">
            <div class="bio">
                <h3>Welcome to my Page!</h3>
                <p>Hello, I'm Widia Maulana Pratama, a passionate WordPress developer from Indonesia that dedicated to crafting outstanding web experiences. I believe that every project is an opportunity to bring boundless creativity and functionality to the online world.</p>
                <p>Feel free to explore my portfolio to see some recent projects I've completed. Each project reflects my dedication to quality and innovation.</p>
            </div>
            <div class="links">
                <?php foreach ($links as $value) : ?>
                    <div class="item">
                        <a href="<?php print $value['url']; ?>" target="_blank">
                            <i class="<?php print $value['icon']; ?>"></i>
                            <span><?php print $value['label']; ?></span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="projects">
        <div class="masonry-grid">
            <?php foreach ($projects as $value) : ?>
                <div class="item-cell">
                    <div class="item">
                        <a href="<?php print $value['url']; ?>" class="link" target="_blank">
                            <img src="<?php print $value['thumbnail']; ?>" alt="<?php print $value['name']; ?>" class="preview">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="thank-you text-center">
        <h4>Thank you for visiting my portfolio. I look forward to potentially collaborating with you in bringing your vision to the digital world!</h4>
    </div>
</div>