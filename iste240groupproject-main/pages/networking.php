<?php 
    $title = "Networking";
    $path = "../"; 
    include($path . "./assets/inc/header.php");
?>

<body>

    <div class="container">    

        <?php include($path . "./assets/inc/nav.php"); ?>

        <main class="content">

            <h1><?php echo($title)?></h1>

            <hr>

            <p>For many years, networking environments have made extensive use of operating systems based on UNIX. 
            To monitor and troubleshoot network connections, they provide a wide range of network functions and tools. 
            IP addressing is used by Unix systems to identify devices on a network.</p>

            <p>IP addresses can be assigned manually or automatically via DHCP and are categorized into classes (A, B, C, D, and E). 
                Configuration files are used by Unix systems to specify network settings. To configure IP addresses, netmasks, 
                gateways, and DNS servers, use the /etc/network/interfaces file on systems running Debian or the 
                /etc/sysconfig/network-scripts/ifcfg-* files on systems running Red Hat.</p>

            <p>Many networking utilities, such as ping, traceroute, netstat, ifconfig, and tcpdump, are included with Unix systems. 
                These instruments can be used to configure network interfaces, keep track of network traffic, and diagnose network 
                issues. NFS, Samba, and FTP are only a few of the network file systems that are supported by Unix systems.</p>

            <p>While Samba is used to share files with Windows systems, NFS (Network File System) is a common option for file sharing 
                between Unix systems. Tools for building firewalls into Unix systems include iptables, ipfw, and pf. These technologies 
                can be used to manage network traffic and guard against unauthorized access to the system.</p>

            <p>Experiencing network errors? Here’s a list of steps to take to fix your problem: First, check physical connections. Network 
                problems can frequently be caused by physical connections. Verify that all wires are properly connected, and turn on 
                any network devices. Next, verify that the network settings, including IP address, subnet mask, and gateway, are configured 
                correctly. Use the command line tools to retrieve the information from an existing device on the network or check the 
                configuration files. From here, you can use the "ping" command to test connectivity to another device on the network. 
                If the ping test fails, check the network settings or physical connections.</p>

        </main>

    </div>

</body>

<?php 
    include($path . "./assets/inc/footer.php");
?>
