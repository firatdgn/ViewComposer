<?php


    if(!function_exists('getAccountValue')) {
        function getAccountValue($name) {
            return \App\SocialMedia::where('name', $name)->first()['value'];
        }
    }


    if(!function_exists('getAccountIcon')) {
        function getAccountIcon($name) {
            return \App\SocialMedia::where('name', $name)->first()['icon'];
        }
    }

    if(!function_exists('getInstagramUserName')) {
        function getInstagramUserName() {
            return getAccountValue('Instagram');
        }
    }

    if(!function_exists('getInstagramLink')) {
        function getInstagramLink() {
            return 'https://instagram.com/' . getInstagramUserName();
        }
    }
