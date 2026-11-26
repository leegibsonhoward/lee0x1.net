<?php
require_once dirname(__DIR__, 2) . '/bootstrap.php';

$meta = [
    'title' => 'About Me',
    'description' => 'Learn more about Lee Howard and his interests in programming and computing.'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require PROJECT_ROOT . '/includes/head.php'; ?>
</head>
<body>
    <?php require PROJECT_ROOT . '/includes/header.php'; ?>

    <main>
        <h2>About Me</h2>

        <article>
            <img width="100" src="/about-me/avatar.png" alt="Altered Ego." />
            
            <ul>
                <li>
                    <a href="mailto:Lee Howard(leegibsonhoward@gmail.com)">e-mail</a>
                </li>
                <li>
                    <a href="https://twitter.com/leegibsonhoward">twitter</a>
                </li>
                <li>
                    <a href="https://github.com/leegibsonhoward">github</a>
                </li>
            </ul>
            <p>
                I'm a computer programmer currently working towards my BS in
                Computer Science. I always dreamt about what a career in software
                development would feel like, but I never developed software in a
                professional capacity; only personal projects where I was the sole
                developer. I have tried web development, mobile app development,
                game development but I would rather focus on low level programming
                hardware abstraction concepts and target platforms such as bare-metal,
                x86-64 linux and embedded Linux.
            </p>
            <p>
                The first programming language I learned was QBasic, on my
                IBM 286 clone running Windows 3.1 back in 1995.
            </p>
            <p>
                When I have spare time, I do a bit of Linux systems administration, work
                on this website, develop retro pc/console game prototypes, tinker
                away on my RG353VS and RG353PS. I also customize my already customized
                mechanical keyboards.
            </p>
                
            <p>
                When I take a break from "the computer", I spend the time with my family,
                play Minecraft and GTA 5 on Windows 10 with my son, Call Of Duty Mobile
                on iOS and plenty of retro pc/console games. I also enjoy watching 90's
                movies and reading cyberpunk fiction.
            </p>

            <section>
                <h3>What I use for my work</h3>
                <ul>
                    <li>Most of my work is done on GNU/Linux Debian.</li>
                    <li>I use tmux during remote ssh sessions.</li>
                    <li>Vim is my editor of choice in Linux enviroment.</li>
                    <li>PSYQ SDK on Windows 98 for PSX development.</li>
                    <li>DJGPP w/ RHIDE for Allegro 4 development.</li>
                </ul>
            </section>
            <section>
                <h3>Hardware I use</h3>
                <h4>Desktop:</h4>
                <ul>
                    <li><strong>Case:</strong> CORSAIR Crystal 280X</li>
                    <li><strong>CPU:</strong> AMD Ryzen 5 5600X @ 3.70 GHz</li>
                    <li><strong>Motherboard:</strong> MSI MAG B550M Mortar</li>
                    <li><strong>Monitors:</strong> VIOTEK 24 Inch 1920 x 1080p</li>
                    <li><strong>Graphics card:</strong> MSI GeForce RTX 3050 8GB</li>
                    <li><strong>Hardrives:</strong>
                        <ul>
                            <li><strong>Debian 12</strong> - Samsung 860 EVO 500GB</li>
                            <li><strong>Windows 10</strong> - PNY XLR8 CS3040 1TB</li>
                    </li>
                </ul>
                <li><strong>RAM:</strong> Corsair Vengeance LPX 16GB DDR4</li>
                <li><strong>PSU:</strong> Corsair CX Series 750 Watt</li>
                <li><strong>Keyboard:</strong> Meletrix Zoom75</li>
                </ul>
                <h4>Laptop: </h4>
                <ul>
                    <li><strong>Model:</strong> Lenovo Flex 5</li>
                    <li><strong>CPU:</strong> AMD Ryzen 5 4500U @ 2.38 GHz</li>
                    <li><strong>Graphics card:</strong> Radeon Graphics</li>
                    <li><strong>RAM:</strong> 16GB RAM</li>
                    <li><strong>Harddrive:</strong> 260GB SSD</li>
                    <li><strong>OS:</strong> Windows 10</li>
                </ul>
            </section>
        </article>
    </main>

    <?php require PROJECT_ROOT . '/includes/footer.php'; ?>
</body>
</html>