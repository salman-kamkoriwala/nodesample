/*
 * node app configuration
 * (c) http://javascript-html5-tutorial.com/
 */

var config = {};
config.db = {};
config.general = {};

config.db.type = 'mysql';
config.db.charset = 'utf8';
 
config.db.username = 'root';
config.db.password = 'mysql';
config.db.host = 'localhost';
config.db.dbname = 'node'; // DB name

config.db.comments_tbl = 'tbl_comments';

config.general.host = '//salman.local'; // http://my.host.com etc
config.general.port = 3000;
config.general.debug = true; // debug mode on/off

// export
module.exports = config;