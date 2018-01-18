<?php
/**
 * The main configuration FOG uses.
 *
 * PHP Version 5
 *
 * Constructs the configuration we need to run FOG.
 *
 * @category Config
 * @package  FOGProject
 * @author   Tom Elliott <tommygunsster@gmail.com>
 * @license  http://opensource.org/licenses/gpl-3.0 GPLv3
 * @link     https://fogproject.org
 */
/**
 * The main configuration FOG uses.
 *
 * @category Config
 * @package  FOGProject
 * @author   Tom Elliott <tommygunsster@gmail.com>
 * @license  http://opensource.org/licenses/gpl-3.0 GPLv3
 * @link     https://fogproject.org
 */
class Config
{
    /**
     * Calls the required functions to define items
     *
     * @return void
     */
    public function __construct()
    {
        self::_dbSettings();
        self::_svcSetting();
        if ($_REQUEST['node'] == 'schema') {
            self::_initSetting();
        }
    }
    /**
     * Defines the database settings for FOG
     *
     * @return void
     */
    private static function _dbSettings()
    {
        define('DATABASE_TYPE', 'mysql'); // mysql or oracle
        define('DATABASE_HOST', 'db');
        define('DATABASE_NAME', 'fog');
        define('DATABASE_USERNAME', 'root');
        define('DATABASE_PASSWORD', 'password');
    }
    /**
     * Defines the service settings
     *
     * @return void
     */
    private static function _svcSetting()
    {
        define('UDPSENDERPATH', '/usr/local/sbin/udp-sender');
        define('MULTICASTINTERFACE', 'eth0');
        define('UDPSENDER_MAXWAIT', null);
    }
    /**
     * Initial values if fresh install are set here
     * NOTE: These values are only used on initial
     * installation to set the database values.
     * If this is an upgrade, they do not change
     * the values within the Database.
     * Please use FOG Configuration->FOG Settings
     * to change these values after everything is
     * setup.
     *
     * @return void
     */
    private static function _initSetting()
    {
        define('TFTP_HOST', "172.17.0.3");
        define('TFTP_FTP_USERNAME', "fog");
        define(
            'TFTP_FTP_PASSWORD',
            "hntHUsD11EGXMzOyPZr3TSw/1X3as5WfK8tAjoOJsPE="
        );
        define('TFTP_PXE_KERNEL_DIR', "/var/www/html/fog//service/ipxe/");
        define('PXE_KERNEL', 'bzImage');
        define('PXE_KERNEL_RAMDISK', 127000);
        define('USE_SLOPPY_NAME_LOOKUPS', true);
        define('MEMTEST_KERNEL', 'memtest.bin');
        define('PXE_IMAGE', 'init.xz');
        define('STORAGE_HOST', "172.17.0.3");
        define('STORAGE_FTP_USERNAME', "fog");
        define(
            'STORAGE_FTP_PASSWORD',
            "hntHUsD11EGXMzOyPZr3TSw/1X3as5WfK8tAjoOJsPE="
        );
        define('STORAGE_DATADIR', '/images/');
        define('STORAGE_DATADIR_CAPTURE', '/images/dev');
        define('STORAGE_BANDWIDTHPATH', '/fog/status/bandwidth.php');
        define('STORAGE_INTERFACE', 'eth0');
        define('CAPTURERESIZEPCT', 5);
        define('WEB_HOST', "172.17.0.3");
        define('WOL_HOST', "172.17.0.3");
        define('WOL_PATH', '//fog/wol/wol.php');
        define('WOL_INTERFACE', "eth0");
        define('SNAPINDIR', "/opt/fog/snapins/");
        define('QUEUESIZE', '10');
        define('CHECKIN_TIMEOUT', 600);
        define('USER_MINPASSLENGTH', 4);
        define('NFS_ETH_MONITOR', "eth0");
        define('UDPCAST_INTERFACE', "eth0");
        // Must be an even number! recommended between 49152 to 65535
        define('UDPCAST_STARTINGPORT', 63100);
        define('FOG_MULTICAST_MAX_SESSIONS', 64);
        define('FOG_JPGRAPH_VERSION', '2.3');
        define('FOG_REPORT_DIR', './reports/');
        define('FOG_CAPTUREIGNOREPAGEHIBER', true);
    }
}