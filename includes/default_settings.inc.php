<?php

/*
    MyBlitzortung - a tool for participants of blitzortung.org
	to display lightning data on their web sites.

    Copyright (C) 2011  Tobias Volgnandt

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


/******************************************************/
/* IMPORTANT: DO NOT EDIT THIS FILE!                  */
/* Use config.php for individual setting!             */
/*  (copy the desired line, without the trailing @    */
/******************************************************/

//Default Port for MySQL
@define("BO_DB_PORT", null);

/*** Main File and path for creating graphs and images           ***/
/*   You can use relative or absolute (with leading "/") paths:    */
/*   Only "blitzortung.php" should be ok in most cases             */
/*   Example: http://myhomepage.com/strikes/blitzortung.php        */
/*             ==> BO_FILE = "/strikes/blitzortung.php"            */
@define("BO_FILE", 'blitzortung.php');

/*** UTF8-Encoding                                               ***/
/*   Most Content-Management-Systems use UTF8-encoding.            */
/*   Set it to false, when including with php into your            */
/*   own page and wrong characters appear                          */
@define("BO_UTF8", true);

//Update secret
@define("BO_UPDATE_SECRET", '');

//Default timezone
@define("BO_TIMEZONE", "Europe/Berlin");

//Language settings
@define("BO_LOCALE", 'en');         //main locale
@define("BO_LOCALE2", '');          //shows translation in this language, if main language doesn't exist
@define("BO_LANGUAGES", 'de,en');   //available locales
@define("BO_SHOW_LANGUAGES", true); //show links in the footer

//User / Login
@define("BO_LOGIN_SHOW", true);
@define("BO_LOGIN_ALLOW", 2); //0=nobody, 1=you, 2=all
@define("BO_LOGIN_COOKIE_TIME", 60); // days where automatic login cookie is valid. set to false to disable auto login

//Map display
//Do not raise these values, otherwise autolinking will not work!
@define("BO_RADIUS", 50);             // (kilometers) limits strike display to radius around station
@define("BO_MAX_ZOOM_LIMIT", 8);      // when zoom reaches this level, strike display is limited to max. distance around station (BO_RADIUS)

//Google Map: General settings
@define('BO_MAP_DISABLE', false);
@define("BO_DEFAULT_ZOOM", 7);        // default zoom level
@define("BO_DEFAULT_ZOOM_ARCHIVE", 10);        // default zoom level for archive
@define("BO_MAX_ZOOM_IN", 15);        // max. zoom level, even in the area of you station
@define("BO_MIN_ZOOM_OUT", 4);        // minimal zoom level
@define("BO_DEFAULT_MAP", 'TERRAIN'); 
@define('BO_MAP_CIRCLE_COLOR_LINE', '#FF0000');
@define('BO_MAP_CIRCLE_OPAC_LINE', '0.8');
@define('BO_MAP_CIRCLE_COLOR_FILL', '#FF0000');
@define('BO_MAP_CIRCLE_OPAC_FILL', '0.05');
@define('BO_MAP_STRIKE_SHOW_CIRCLE_ZOOM', 9);
@define('BO_MAP_STRIKE_SHOW_DEVIATION_ZOOM', 12);
@define('BO_MAP_STRIKE_SIZE', 3);
@define('BO_MAP_STRIKE_CIRCLE_SIZE', 4);
@define('BO_MAP_STRIKE_CIRCLE_GROW', 0.5);
@define('BO_MAP_STATION_ICON', 'http://labs.google.com/ridefinder/images/mm_20_red.png');
@define('BO_MAP_MAX_STRIKES_PER_TILE', 20000);

//Update intervals (Minutes!)
@define("BO_UP_INTVL_STRIKES", 5);
@define("BO_UP_INTVL_STATIONS", 15);
@define("BO_UP_INTVL_RAW", 60);

//set to true, if you want to use "file_get_contents"
@define("BO_USE_PHPURLWRAPPER", false);

//Disable station statistics
@define("BO_STATION_STAT_DISABLE", false);

//URLs
@define("BO_MAP_URL", 'index.php?bo_page=map');
@define("BO_ARCHIVE_URL", 'index.php?bo_page=archive');
@define("BO_STATISTICS_URL", 'index.php?bo_page=statistics');
@define("BO_INFO_URL", 'index.php?bo_page=info');
@define("BO_LOGIN_URL", 'index.php?bo_page=login');

//Experimental Polarity
@define("BO_EXPERIMENTAL_POLARITY_CHECK", true);
@define("BO_EXPERIMENTAL_POLARITY_ZOOM", 8);
@define("BO_MAP_STRIKE_POLARITY_SIZE", 5);

//Calculate tracks
//WARNING: This is currently very expermintal. It may slow down your server!
@define("BO_UP_INTVL_TRACKS", 5);  //update tracks every x minutes
@define("BO_TRACKS_SCANTIME", 0); //scan time in minutes (set to 0 to disable tracks)
@define("BO_TRACKS_DIVISOR",  2); 
@define("BO_TRACKS_MAP_OPACITY", 0.7); 
@define("BO_TRACKS_MAP_ZOOM_MIN", 6); 
@define("BO_TRACKS_MAP_ZOOM_MAX", 10); 
@define("BO_TRACKS_MAP_ZOOM_INFO", 7);
@define("BO_TRACKS_MAP_TIME_FORCAST", 60);
@define("BO_TRACKS_MAP_MIN_STRIKES_DISPLAY", 10);
@define("BO_TRACKS_SHOW_UNTRACKED", false); 
@define("BO_TRACKS_RADIUS_SEARCH_STRIKES", 10);
@define("BO_TRACKS_RADIUS_SEARCH_NGBR_CELLS", 30);
@define("BO_TRACKS_RADIUS_SEARCH_OLD_CELLS", 30);


//Show GPS Info
@define("BO_SHOW_GPS_INFO", true);

//Archive
@define("BO_ENABLE_ARCHIVE_MAPS", false); //Enables archive (maps by date and animations) for guests
@define("BO_ENABLE_DENSITIES", false); //Enables densities for guests (set the also next option to true)
@define("BO_CALC_DENSITIES", false); //Calculates Densities 
@define("BO_CALC_DENSITIES_CURRENT", true); //Calculates Densities for current year/month
@define("BO_ARCHIVE_SEARCH_STRIKECOUNT", 10);

//Mark stations offline after specified time with no signals
@define("BO_STATION_OFFLINE_HOURS", 24);

//Images
@define("BO_IMAGE_PALETTE_COLORS", 0);

/*** Graphs ***/
@define("BO_GRAPH_ANTIALIAS", false);

// Raw Data Graph
@define("BO_GRAPH_RAW_W", 200);
@define("BO_GRAPH_RAW_H", 100);
@define("BO_GRAPH_RAW_COLOR1", '#f00@0.5');
@define("BO_GRAPH_RAW_COLOR2", '#0f0@0.5');
@define("BO_GRAPH_RAW_COLOR3", '#800@0.6');
@define("BO_GRAPH_RAW_COLOR_BOX", '#d0d0d0');
@define("BO_GRAPH_RAW_COLOR_BACK", '#fff');
@define("BO_GRAPH_RAW_COLOR_MARGIN",'#fff');
@define("BO_GRAPH_RAW_COLOR_FRAME", '#fff');
@define("BO_GRAPH_RAW_COLOR_XGRID", '#eee');
@define("BO_GRAPH_RAW_COLOR_YGRID", '#eee');
@define("BO_GRAPH_RAW_COLOR_XAXIS", '#666');
@define("BO_GRAPH_RAW_COLOR_YAXIS", '#666');

// Statistics Graph
@define("BO_GRAPH_STAT_W", 550);
@define("BO_GRAPH_STAT_H", 300);
@define("BO_GRAPH_STAT_COLOR0", '#f00@0.5');
@define("BO_GRAPH_STAT_COLOR1", '#f00@0.5');
@define("BO_GRAPH_STAT_COLOR2", '#0f0@0.5');
@define("BO_GRAPH_STAT_COLOR3", '#800@0.6');
@define("BO_GRAPH_STAT_COLOR_BOX", '#d0d0d0');
@define("BO_GRAPH_STAT_COLOR_BACK", '#fff');
@define("BO_GRAPH_STAT_COLOR_CAPTION", '#666');
@define("BO_GRAPH_STAT_COLOR_MARGIN",'#fff');
@define("BO_GRAPH_STAT_COLOR_FRAME", '#fff');
@define("BO_GRAPH_STAT_COLOR_XGRID", '#eee');
@define("BO_GRAPH_STAT_COLOR_YGRID", '#eee');
@define("BO_GRAPH_STAT_COLOR_XAXIS", '#666');
@define("BO_GRAPH_STAT_COLOR_YAXIS", '#666');
@define("BO_GRAPH_STAT_COLOR_XAXIS_TITLE", '#666');
@define("BO_GRAPH_STAT_COLOR_YAXIS_TITLE", '#666');
@define("BO_GRAPH_STAT_COLOR_LEGEND_FILL", '#fff');
@define("BO_GRAPH_STAT_COLOR_LEGEND_TEXT", '#666');
@define("BO_GRAPH_STAT_COLOR_LEGEND_FRAME", '#fff');
@define("BO_GRAPH_STAT_HOURS_BACK", 24);
@define("BO_GRAPH_STAT_HOURS_BACK_STATIONS", 72);

//Statistics-Graph: Strikes (Month, Year)
@define("BO_GRAPH_STAT_STRIKES_TIME_COLOR_L1", '#00f@0.9');
@define("BO_GRAPH_STAT_STRIKES_TIME_COLOR_F1", '#f99@0.4');
@define("BO_GRAPH_STAT_STRIKES_TIME_COLOR_L2", '#00f@0.9');
@define("BO_GRAPH_STAT_STRIKES_TIME_COLOR_F2", '#99f@0.4');
@define("BO_GRAPH_STAT_STRIKES_TIME_WIDTH", 0.98);


//Statistics-Graph: Strikes
@define("BO_GRAPH_STAT_STR_COLOR_L1", '#99f@1');
@define("BO_GRAPH_STAT_STR_COLOR_F1", '#99f@0.7');
@define("BO_GRAPH_STAT_STR_WIDTH_1",  1);
@define("BO_GRAPH_STAT_STR_COLOR_L2", '#00f@0.1');
@define("BO_GRAPH_STAT_STR_COLOR_F2", false);
@define("BO_GRAPH_STAT_STR_WIDTH_2",  2);
@define("BO_GRAPH_STAT_STR_COLOR_L3", '#f00@0.5');
@define("BO_GRAPH_STAT_STR_COLOR_F3", false);
@define("BO_GRAPH_STAT_STR_WIDTH_3",  1);

//Statistics-Graph: Signals
@define("BO_GRAPH_STAT_SIG_COLOR_L1", '#fa0@1');
@define("BO_GRAPH_STAT_SIG_COLOR_F1", '#fa0@0.8');
@define("BO_GRAPH_STAT_SIG_WIDTH_1",  1);
@define("BO_GRAPH_STAT_SIG_COLOR_L2", '#fc3@0.2');
@define("BO_GRAPH_STAT_SIG_COLOR_F2", false);
@define("BO_GRAPH_STAT_SIG_WIDTH_2",  2);

//Statistics-Graph: Signals
@define("BO_GRAPH_STAT_DIST_COLOR_L1", '#fa0@1');
@define("BO_GRAPH_STAT_DIST_COLOR_F1", '#fa0@0.8');
@define("BO_GRAPH_STAT_DIST_WIDTH_1",  1);
@define("BO_GRAPH_STAT_DIST_COLOR_L2", '#fc3@0.2');
@define("BO_GRAPH_STAT_DIST_COLOR_F2", false);
@define("BO_GRAPH_STAT_DIST_WIDTH_2",  2);

//Statistics-Graph: Ratio
@define("BO_GRAPH_STAT_RAT_COLOR_L1", '#fa0@0.9');
@define("BO_GRAPH_STAT_RAT_COLOR_F1", '#fa0@0.7');
@define("BO_GRAPH_STAT_RAT_WIDTH_1",  1);
@define("BO_GRAPH_STAT_RAT_COLOR_L2", '#fa0@0.5');
@define("BO_GRAPH_STAT_RAT_COLOR_F2", false);
@define("BO_GRAPH_STAT_RAT_WIDTH_2",  2);
@define("BO_GRAPH_STAT_RAT_COLOR_L3", '#88f@0.9');
@define("BO_GRAPH_STAT_RAT_COLOR_F3", '#88f@0.7');
@define("BO_GRAPH_STAT_RAT_WIDTH_3",  1);
@define("BO_GRAPH_STAT_RAT_COLOR_L4", '#00f@0.5');
@define("BO_GRAPH_STAT_RAT_COLOR_F4", false);
@define("BO_GRAPH_STAT_RAT_WIDTH_4",  2);

//Statistics-Graph: Stations
@define("BO_GRAPH_STAT_STA_COLOR_L1", '#c00@0.98');
@define("BO_GRAPH_STAT_STA_COLOR_F1", '#c00@0.85');
@define("BO_GRAPH_STAT_STA_WIDTH_1",  1);
@define("BO_GRAPH_STAT_STA_COLOR_L2", '#fa0@0.1');
@define("BO_GRAPH_STAT_STA_WIDTH_2",  1);
@define("BO_GRAPH_STAT_STA_COLOR_L3", '#0cc@0.90');
@define("BO_GRAPH_STAT_STA_COLOR_F3", '#0cc@0.85');
@define("BO_GRAPH_STAT_STA_WIDTH_3",  1);
@define("BO_GRAPH_STAT_STA_COLOR_L4", '#0ac@0.1');
@define("BO_GRAPH_STAT_STA_WIDTH_4",  1);

//Statistics-Graph: Distance-Ratio
@define("BO_GRAPH_STAT_RATIO_DIST_DIV", 20);
@define("BO_GRAPH_STAT_RATIO_DIST_LINE", false);
@define("BO_GRAPH_STAT_RATIO_DIST_COLOR_L1", '#00f@1');
@define("BO_GRAPH_STAT_RATIO_DIST_COLOR_F1", '#ada@0');
@define("BO_GRAPH_STAT_RATIO_DIST_WIDTH1",  0.6);
@define("BO_GRAPH_STAT_RATIO_DIST_COLOR_L2", '#22f@0.8');
@define("BO_GRAPH_STAT_RATIO_DIST_COLOR_F2", '#22f@0.95');
@define("BO_GRAPH_STAT_RATIO_DIST_WIDTH2",  1);

//Statistics-Graph: Bearing-Ratio
@define("BO_GRAPH_STAT_RATIO_BEAR_DIV", 10);
@define("BO_GRAPH_STAT_RATIO_BEAR_LINE", false);
@define("BO_GRAPH_STAT_RATIO_BEAR_COLOR_L1", '#00f@1');
@define("BO_GRAPH_STAT_RATIO_BEAR_COLOR_F1", '#ada@0');
@define("BO_GRAPH_STAT_RATIO_BEAR_WIDTH1",  null);
@define("BO_GRAPH_STAT_RATIO_BEAR_COLOR_L2", '#22f@0.8');
@define("BO_GRAPH_STAT_RATIO_BEAR_COLOR_F2", '#22f@0.95');
@define("BO_GRAPH_STAT_RATIO_BEAR_WIDTH2",  1);


/*** Automatic Data-Purging ***/
// min-age in hours, 0 disables
@define("BO_PURGE_SIG_NS", 24);     //signals with no strike assigned        
@define("BO_PURGE_SIG_ALL", 192);   //all signals
@define("BO_PURGE_STR_NP", 0);      //strikes not participated
@define("BO_PURGE_STR_ALL", 0);     //all strikes
@define("BO_PURGE_STR_DIST", 0);    //strikes farther than BO_PURGE_STR_DIST_KM
@define("BO_PURGE_STRSTA_ALL", 24); //strike <-> stations table (very important!)
@define("BO_PURGE_STA_OTHER",  96); //station statistics: other (not yours)
@define("BO_PURGE_STA_ALL", 0);     //station statistics: all
@define("BO_PURGE_STR_DIST_KM", 2000);

//global purge settings
@define("BO_PURGE_ENABLE", true);
@define("BO_PURGE_MAIN_INTVL", 6);


//Stations
@define('BO_MAP_STATIONS_ICON', 'http://maps.google.com/mapfiles/kml/pal4/icon24.png');


//MyBo Stations
@define('BO_MAP_MYBO_CIRCLE_COLOR_LINE', '#0000FF');
@define('BO_MAP_MYBO_CIRCLE_OPAC_LINE', '0.8');
@define('BO_MAP_MYBO_CIRCLE_COLOR_FILL', '#0000FF');
@define('BO_MAP_MYBO_CIRCLE_OPAC_FILL', '0.05');
@define('BO_MAP_MYBO_ICON', 'http://labs.google.com/ridefinder/images/mm_20_blue.png');


// ALERTS
@define("BO_ALERTS", true);
@define("BO_ALERT_CHECK_INTERVAL", 15);
@define("BO_ALERT_SEND_INTERVAL", 45);


// SMS-Gateway URL
// Leave it blank, if you don't want to use that feature.
// {text} will be replaced by the message text
// {tel}  will be replaced by the telephone number
/* Some examples. Of course you have to register yourself at the gateway provider and change USER/PASS to your values!         */
/*  http://gateway.smstrade.de/?key=PASS&to={tel}&message={text}&from=MyBO&route=gold                         */
/*  http://gateway.sms77.de/?u=USER&p=PASS&to={tel}&text={text}&type=quality&from=MyBO                        */
/*  http://www.innosend.de/gateway/sms.php?id=USER&pw=PASS&absender=MyBO&empfaenger={tel}&text={text}&type=4  */
@define("BO_SMS_GATEWAY_URL", ''); //do not edit here, put it in config.php file!!!


//Settings for Developers
@define("BO_DEBUG", false);
@define("BO_LANG_AUTO_ADD", false);

//Cache
@define("BO_CACHE_DISABLE", false);
@define("BO_CACHE_SUBDIRS", true);


/************************************************************************/
/* Variables for Maps, Images, Densities ..                             */
/************************************************************************/



//GoogleMaps: Strike Overlays
if (!isset($_BO['mapcfg'][0]))
	$_BO['mapcfg'][0] = $_BO['tpl_gmap']['0-15'];

if (!isset($_BO['mapcfg'][1]))
	$_BO['mapcfg'][1] = $_BO['tpl_gmap']['15-120'];
	
if (!isset($_BO['mapcfg'][2]))
	$_BO['mapcfg'][2] = $_BO['tpl_gmap']['2-24h'];

	
/*** Image Maps ***/
if (!isset($_BO['mapimg'][0]))
	$_BO['mapimg'][0] = $_BO['tpl_imgmap']['europe'];

if (!isset($_BO['mapimg'][1]))
	$_BO['mapimg'][1] = $_BO['tpl_imgmap']['germany_mini'];

if (!isset($_BO['mapimg'][2]))
	$_BO['mapimg'][2] = $_BO['tpl_imgmap']['germany_lkr'];

if (!isset($_BO['mapimg'][3]))
	$_BO['mapimg'][3] = $_BO['tpl_imgmap']['europe_mini'];

	
/*** Densities ***/
if (!isset($_BO['density'][0]))
	$_BO['density'][0] = $_BO['tpl_density']['europe'];

if (!isset($_BO['density'][1]))
	$_BO['density'][1] = $_BO['tpl_density']['germany'];

?>