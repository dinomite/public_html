<html>
<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $hostname = gethostbyaddr($ip);
    print '<h2>' . $hostname . '(' . $ip . ')</h2>';
?>

<h2>Weather</h2>
<ul>
    <li><a href="wx/4up/east.html">East CONUS infrared 4-up</a></li>
    <li><a href="wx/4up/west.html">West CONUS infrared 4-up</a></li>
    <li><a href="wx/radar/mux">SFBAY (MUX) base reflectivity</a></li>
    <li><a href="wx/radar/lwx">NoVA (LWX) base reflectivity</a></li>
</ul>

<h2>Other</h2>
<ul>
    <li><a href="tmp/">Temporary stuff</a></li>
    <li><a href="info/">Information</a></li>
    <li><a href="http://supergenpass.com/">SuperGenPass</a> (<a href="<?php print file_get_contents('info/supergenpass.js'); ?>">Bookmarklet</a>)</li>
</ul>

<h2>Quick homedir</h2>
bash -c "$(curl -LfsS http://dinomite.net/~dinomite/homedir.php)"

<h2>SSH Host Keys</h2>
<ul>
    <li>
        caligula<br>
        <tt>RSA 2048 4b:9a:43:55:c2:fe:10:02:54:85:82:a3:36:70:3e:59</tt><br>
        <tt>DSA 1024 31:74:b1:51:45:9c:da:ba:b7:fd:d3:ee:8f:c5:7f:d4</tt>
    </li>
    <li>
        titus<br>
        <tt>RSA1 9b:28:5a:d6:c0:dc:c4:10:6a:60:28:8c:d5:a1:b9:f6</tt><br>
        <tt>RSA 2048 62:a2:40:d0:70:87:c6:ac:69:8c:e0:b7:df:06:1e:b8</tt><br>
        <tt>DSA 1024 2f:a8:2c:6a:aa:49:05:3e:29:13:cb:2b:a1:a7:05:24</tt>
    </li>
    <li>
        juno<br>
        <tt>1024 9d:67:77:d7:52:54:21:28:60:05:9e:4c:a1:5c:1c:25</tt><br>
        <tt>256 89:ed:93:1b:2c:15:3d:05:47:a8:a1:0e:98:02:04:b5</tt><br>
        <tt>2048 49:24:18:8e:3b:61:e5:b3:31:68:04:5a:eb:29:e4:08</tt><br>
    </li>
    <li>
        didius<br>
        <tt>1024 cc:57:16:a0:4e:ea:e3:a4:eb:81:35:d6:a5:4b:01:7a</tt><br>
        <tt>256 37:10:57:6d:fc:0e:6f:72:44:4b:9d:43:87:88:0d:76</tt><br>
        <tt>256 70:8e:6a:87:8f:fe:72:f5:92:05:09:20:ab:2e:49:6c</tt><br>
        <tt>2048 6e:1e:28:0b:06:40:43:ef:ab:48:05:b7:15:17:06:fd</tt><br>
    </li>
    <li>
        scorn<br>
        <tt>1024 24:54:27:1c:2b:04:56:70:93:37:c6:f7:3c:0e:7b:1c</tt><br>
        <tt>RSA 2048 61:20:fe:14:1a:22:b2:5f:f0:2d:d9:90:df:d5:28:f5</tt><br>
        <tt>DSA 1024 23:0b:cc:f4:d4:c7:04:36:3a:e2:14:3e:55:34:51:15</tt>
    </li>
    <li>
        tonka<br>
        <tt>DSA 2048 07:99:b3:fc:18:a9:cd:44:30:25:47:9b:c5:85:2e:86</tt>
    </li>
    <li>
        rancor<br>
        <tt>1024 5b:89:4e:15:ff:c9:8e:44:fe:20:2c:7f:73:29:8b:22</tt><br>
        <tt>RSA 2048 55:53:6a:2d:c8:eb:88:7c:46:bf:68:95:9e:3d:7c:6e</tt><br>
        <tt>DSA 1024 1a:37:cc:9a:72:4f:a9:cc:48:d2:51:d6:1a:2f:2c:6c</tt>
    </li>
</ul>

<h2>SSH Public Keys</h2>
<ul>
    <li>
        <a href='info/caligula-ssh_pubkey'>caligula</a>
    </li>
    <li>
        <a href='info/titus-ssh_pubkey'>titus</a>
    </li>
    <li>
        <a href='info/vespasian-ssh_pubkey'>vespasian</a>
    </li>
    <li>
        <a href='info/antoninus-id_rsa.pub'>antoninus</a>
    </li>
</ul>

<a href='info/pubkey'><h2>PGP Key</h2></a>
<pre>
<?= file_get_contents('info/pubkey'); ?>
</pre>

</html>
