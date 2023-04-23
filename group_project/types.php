<?php

    session_name('UserLogin');
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="assets/media/unix_logo.png">
    <link rel="stylesheet" href="assets/css/types.css">
    <script src="assets/java_script/script.js"></script>
    <title>UnixGuide | Types</title>

</head>
<body onload="scrollFunction();">
    
    <header id="top-of-page"></header>

    <nav>
        <div class="wrapper">
            <div class="logo">
                <a href="index.php"><img class="logo-img" src="assets/media/unix_logo.png" alt="UnixGuide Logo"></a>
            </div>
            <input type="radio" name="slide" id="menu">
            <input type="radio" name="slide" id="cancel">
            <ul class="nav-links">
                <li>
                    <label class="nav-btns btn-cancel" for="cancel"><i class="fa fa-times"></i></label>
                </li>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a class="desktop-item" href="about.php">About</a>
                    <input id="show-drop-menu" type="checkbox">
                    <a id="invisible-about" href="about.php">Visit About</a>
                    <label class="mobile-item" for="show-drop-menu">About</label>
                    <ul class="drop-menu">
                        <li><a href="commands.php">Commands</a></li>
                        <li><a href="directories.php">Directories</a></li>
                        <li><a href="permissions.php">Permissions</a></li>
                        <li><a href="packages.php">Packages</a></li>
                    </ul>
                </li>
                <li><a href="history.php">History</a></li>
                <li>
                    <a class="desktop-item active-nav" href="types.php">Types</a>
                    <input id="show-mega-menu" type="checkbox">
                    <a id="invisible-types" href="types.php">Visit Types</a>
                    <label class="mobile-item active-nav" for="show-mega-menu">Types</label>
                    <ul class="mega-links">
                        <li><a href="oracle_solaris.php">Oracle Solaris</a></li>
                        <li><a href="darwin.php">Darwin</a></li>
                        <li><a href="ibm_aix.php">IBM AIX</a></li>
                        <li><a href="hp_ux.php">HP-UX</a></li>
                        <li><a href="free_bsd.php">FreeBSD</a></li>
                        <li><a href="net_bsd.php">NetBSD</a></li>
                        <li><a href="xenix.php">Xenix</a></li>
                        <li><a href="sgi_irix.php">SGI IRIX</a></li>
                        <li><a href="tru64_unix.php">TRU64 UNIX</a></li>
                        <li><a href="mac_os.php">macOS</a></li>
                    </ul>
                </li>
                <li><a href="tutorial.php">Tutorial</a></li>
                <li><a href="quiz.php">Quiz</a></li>
                <li><a href="authors.php">Authors</a></li>
            </ul>
            <?php
                if(!isset($_SESSION['name'])) {
                    echo "<div class='btn-sign-up'>
                            <a href='sign_up.php'>Sign Up</a>
                          </div>";
                }else {
                    echo "<div id='user-name'>" . $_SESSION['name'] . "</div>";
                }
            ?>
            <label class="nav-btns btn-menu" for="menu"><i class="fa fa-bars"></i></label>
        </div>
    </nav>

    <div class="main-div">
        <h1>Types of Unix Operating Systems</h1>
        <div class="section-div">
            <div class="img-div">
                <img class="types_img" src="assets/media/oracle_img.png" alt="Oracle">
            </div>
            <div class="navigation">
                <h1>Oracle Solaris</h1>
                <p class="section-txt">Oracle Solaris is a Unix-based operating system known for its scalability, reliability,
                    and advanced security features.
                </p>
                <div class="button-div">
                    <a class="learn-btn1" href="oracle_solaris.php">Learn More</a>
                </div>
            </div>
        </div>
        <div class="section-div section-reverse">
            <div class="navigation">
                <h1>Darwin</h1>
                <p class="section-txt">Darwin is one of the types of UNIX operating systems based on NeXT-STEP,
                    BSD, Mach, and other open-source projects. It was created in 2000 by Apple. The Darwin kernel,
                    called XNU, is responsible for much of the DNA of the macOS.
                </p>
                <div class="button-div">
                    <a class="learn-btn1" href="darwin.php">Learn More</a>
                </div>
            </div>
            <div class="img-div">
                <img class="types_img" src="assets/media/darwin_img.jpg" alt="Darwin">
            </div>
        </div>
        <div class="section-div">
            <div class="img-div">
                <img class="types_img" src="assets/media/aix_img1.png" alt="AIX">
            </div>
            <div class="navigation">
                <h1>IBM AIX</h1>
                <p class="section-txt">AIX (Advanced Interactive eXecutive) is an enterprise-grade OS based on UNIX
                    System V and enhanced with 4.3BSD features. It was first released in 1986, and since then,
                    it has seen spectacular success. The AIX was known for its security, scalability and reliability
                    and the fact that it was the first OS to have a journalizing file system.
                </p>
                <div class="button-div">
                    <a class="learn-btn1" href="ibm_aix.php">Learn More</a>
                </div>
            </div>
        </div>
        <div class="section-div section-reverse">
            <div class="navigation">
                <h1>HP-UX</h1>
                <p class="section-txt">HP-UX, or Hewlett Packard Unix, is one of the types of UNIX operating
                    systems based on the UNIX system V. This OS introduced access control lists for file access
                    permissions and was known for its security management and flexible memory.
                </p>
                <div class="button-div">
                    <a class="learn-btn1" href="oracle_solaris.php">Learn More</a>
                </div>
            </div>
            <div class="img-div">
                <img class="types_img" src="assets/media/hp_img.png" alt="HP-UX">
            </div>
        </div>
        <div class="section-div">
            <div class="img-div">
                <img class="types_img" src="assets/media/free_bsd_img1.jpg" alt="FreeBSD">
            </div>
            <div class="navigation">
                <h1>FreeBSD</h1>
                <p class="section-txt">FreeBSD is a free, open-source operating system based on the Berkeley Software
                    Distribution (BSD). It is a feature-rich OS that includes a fully functional kernel, device drivers, tools,
                    and documentation.
                </p>
                <div class="button-div">
                    <a class="learn-btn1" href="free_bsd.php">Learn More</a>
                </div>
            </div>
        </div>
        <div class="section-div section-reverse">
            <div class="navigation">
                <h1>NetBSD</h1>
                <p class="section-txt">NetBSD is a free and open-source operating system built on the code from the 4.4BSD and
                    386BSD operating systems. Portability has been the highest priority for the OS. NetBSD divides its device drivers
                    into machine-dependent and machine-independent components using a custom hardware abstraction layer to hide the
                    hardware access details. 
                </p>
                <div class="button-div">
                    <a class="learn-btn1" href="oracle_solaris.php">Learn More</a>
                </div>
            </div>
            <div class="img-div">
                <img class="types_img" src="assets/media/net_bsd_img.png" alt="NetBSD">
            </div>
        </div>
        <div class="section-div">
            <div class="img-div">
                <img class="types_img" src="assets/media/xenix_img.jpg" alt="Xenix">
            </div>
            <div class="navigation">
                <h1>XENIX</h1>
                <p class="section-txt">UNIX mania caught up to Microsoft in the late 1970s, and they decided to license their
                    own UNIX-like OS from AT&T. The result was the development of Xenix. The OS was never sold directly to consumers
                    but rather licensed to various other companies like IBM, SCO, Intel etc.
                </p>
                <div class="button-div">
                    <a class="learn-btn1" href="oracle_solaris.php">Learn More</a>
                </div>
            </div>
        </div>
        <div class="section-div section-reverse">
            <div class="navigation">
                <h1>SGI IRIX</h1>
                <p class="section-txt">Silicon Graphics (SGI) created IRIX, a now-discontinued OS, that ran natively on their
                    MIPS workstations and servers. It was one of the types of UNIX operating systems that branched from UNIX
                    system V and included BSD extensions.
                </p>
                <div class="button-div">
                    <a class="learn-btn1" href="oracle_solaris.php">Learn More</a>
                </div>
            </div>
            <div class="img-div">
                <img class="types_img" src="assets/media/irix_img.png" alt="IRIX">
            </div>
        </div>
        <div class="section-div">
            <div class="img-div">
                <img class="types_img" src="assets/media/tru64_img1.jpg" alt="TRU64">
            </div>
            <div class="navigation">
                <h1>TRU64 UNIX</h1>
                <p class="section-txt">TRU64 Unix is a discontinued UNIX-like OS created by Digital Equipment Corporation
                    and based on the Alpha Instruction Set architecture (ISA). Tru64 is based on the Open Software Foundation's
                    (OSF) OSF/1 operating system, created to compete with the UNIX System V version.
                </p>
                <div class="button-div">
                    <a class="learn-btn1" href="tru64_unix.php">Learn More</a>
                </div>
            </div>
        </div>
        <div class="section-div section-reverse">
            <div class="navigation">
                <h1>macOS</h1>
                <p class="section-txt">Apple's macOS is a commercially available UNIX-based operating system developed and
                    maintained by the company. The OS is deeply inspired by the previous Apple OS project, the Mac OS X. The
                    operating systems NeXT and Darwin are significant influences on the macOS.
                </p>
                <div class="button-div">
                    <a class="learn-btn1" href="mac_os.php">Learn More</a>
                </div>
            </div>
            <div class="img-div">
                <img class="types_img" src="assets/media/macos_img1.png" alt="macOS">
            </div>
        </div>
    </div>

    <div class="div-back-button">
        <a id="back-button" href="#top-of-page">&#9757;</a>
    </div>

    <footer>
        <p>&copy; 2023 UnixGuide | <a class="reference-link" href="references.html" target="_blank">References</a> | W&M Project</p>
    </footer>
    
</body>
</html>