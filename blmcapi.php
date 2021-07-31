<?php
abstract class BLMCAPI {
    static function checkDiscord($id) {
        $query = file_get_contents('https://api.blacklistmc.net/api/search/discord/'.$id);
        $json = json_decode($query, true);

        return $json['blacklisted'];
    }
    static function checkMinecraft($pseudo) {
        $query = file_get_contents('https://api.blacklistmc.net/api/search/mc/'.$pseudo);
        $json = json_decode($query, true);

        return $json['blacklisted'];
    }
    static function checkTwitter($username) {
        $query = file_get_contents('https://api.blacklistmc.net/api/search/twitter/'.$username);
        $json = json_decode($query, true);

        return $json['blacklisted'];
    }
}
?>