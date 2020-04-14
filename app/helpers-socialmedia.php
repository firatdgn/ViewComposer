<?php


    function getAccountValue($name)
    {
        return \App\SocialMedia::where('name', $name)->first()['value'];
    }

    function getInstagramUserName()
    {
        return getAccountValue('Instagram');
    }

    function getInstagramLink()
    {
        return 'https://instagram.com/' . getInstagramUserName();
    }
