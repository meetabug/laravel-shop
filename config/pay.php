<?php

return [
    'alipay' => [
        'app_id'         => '2016093000635096',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAl7MdIWRAHJxkSiSE6L2YM8s6fpaLlqP7lYTzHWSPrStb0kdfcPY5nYBqAgyEfvgFa2cRUAgQHDffKXbgHap04h00dsCxlO1EOvTchToaVk1g8rYNG1OmYDKWp7+ptCCmctnlXVZ1Ct9dG45QguCEFr94N6FDUVvP8Cz0oD35ij6Ekkv3v5aUvhjdX87kFW0wJCFUHWWB5suttS18GslxlZIcKwMmNbCaVLTFWXjf3ND3OtMMT9k00RvhBQjAnkfkqT2WJ13KivSdDoJifgmX/sWuCPWvrNB3iQvmYTEQkhPJBgGfIi/fOKr5cZyZSW4mrafrJVPk5RKocFmAhWyUyQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAzxf8R/4AsUhI33VVWSsn1vmLR2AllCTtgjbWzcipxbcWYkSGAKLZaMW9mTtYJikktOkS0yqxvl2D7cpFpGqDd67D8u0sUataNRtlQYCIaiBWj+3XcBiH2CPS5IpJgrMxKgpU3C8M9TuxInnuDgPwD8yYCdFGTF9zZbn0COVZFOsem3GjlnIfd1Wyd1FtrK06gmBX5KHIa3aUDv8erTp8qNFopZDfoXYd/LWOC5xWc+CRemgoI+Y+HNPzp/+igaMa9QaqeRVOe74ke5LdWn3K/HbOdNKPjyONFZ5RfdIgvFJQ1x6C///1hCPyInLs07poB7RebZ+H/rOpzpVD7QShvQIDAQABAoIBAQCjvthYaCtOAdS080ZvweK3ZQrOfeRYtbYiTpAbmD08ut51Bq9Z02nKIQggH788NS3z6ZJb65cs6S5Gl7fnH90hhcsjyopPbQhfk3DFkQbLuxQWq727wXmv2euHjxw+vsbx8cdVbdJ2GSOfGf+zj0OCiofww0stWg+ZcKXXXtjH4w/Prud2R/nuMlHW3tmChJQalf8vRJZwAocpEdIV+BmduxvkRucr9E9EymiL6bgWicjiaX6wefEC6LK6Hl3Bl7/p0PYzKHK9Su4yEkzbzjPoK0OmpagavSgptLez0Ol6QGC1YjNSSOqN+75J9AAwtndXoFjU2KEhnJgeol7cGCT1AoGBAPPwBte2AxOJDS9qEE6p7zwXNi3fqIpUG4m/r4VirlSDWZDbJadW4Om98g6sIIQYW+7olcnP/iBYQbg4znV872pR75aVn5z0H3r/pRu3gFVHJkPtWCFe80kZOvNGcaq//Uu2x8zXjiaXiLTcrhR2aHAeOkY+IvJ69J4YUfL84bcrAoGBANlVjn/ASQZ0xCCTjWMe1QW1qyBLsJZgOtGoIJOWEs5WhX6pTN1YuDHnKhIeBNDCsP8hLT1FxPvMnYwUjClWi3+VEf03jgeeyAoTiIudQQ3VDhXhQuDXExlDWc/AQ4d5Mr6es5NIPnHwXU6GhQftC1eM4MQSStSmbuu4+klfRxa3AoGBANLMp30dgscM9mH07CauX1i0TlOSJZl0WV/OUCWaQ0AxSeMOHhnfz/jt9hGL2YWNb1SjlV2S6e6VliVWocORtWtRZxPgNNBzfgjShqHPD42iMIUew7wCy4Zt0S2NwIhn5MHbMAnqdKMQ7EgvNBfmwxWwaXduFtEoQ9+i8J5kvcGFAoGAYLyvX/fDyWbiAaoLzenkYdU6JXbrVBPjOnz+exLarhNe+kD7YK7j1fqSBFxuQknWpMksrNBIXNf37Gkc9i16jEBbMH2w731ihvGo3pQRZ8nEqkKJFTFGZAFRkaJ/rGZrCuPzBISsnuShc5l2z09YtBCV31BRFJQ8XRoJ9ey95MMCgYEA58aMGCI/vB2xWIlJogztX5N3Z1i8Or2ZDb8knTDfKLdKw5Vs8231myZORLM0xa2zGZKCc6QI+W1NIxIEpzIn0/CF8JS1h9X+Dyul4tZylubDExGBV/F8ZVHiQnh7k+Nc9kszq87h+0/HujHravhIxjrlQMK+XbRGSvkr05vzxHY=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
