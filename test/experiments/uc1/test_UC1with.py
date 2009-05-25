# -*- coding: iso-8859-15 -*-
"""Simple FunkLoad test

$Id: test_Simple.py 53544 2009-03-09 16:28:58Z tlazar $
"""
import unittest
from funkload.FunkLoadTestCase import FunkLoadTestCase

class UC1with(FunkLoadTestCase):
    """This test use a configuration file UC1with.conf."""

    def setUp(self):
        """Setting up test."""
        self.logd("setUp")
        self.server_url = self.conf_get('main', 'url')

    def test_uc1(self):
        # The description should be set in the configuration file
        server_url = self.server_url
        
        self.post(server_url + '/script.php', {
            'use': True,
            'type': 'HardingGrass',
            'day': '2009-05-24',
            'time': '12:00:00',
            'imei': '356996016212614',
            'longitude': -118.44965242400001,
            'latitude': 34.0611329969,
        }, description = 'POST to the script file using cametrics')
        self.assert_("SUCCESS" in self.getBody())

    def tearDown(self):
        """Setting up test."""
        self.logd("tearDown.\n")


if __name__ in ('main', '__main__'):
    unittest.main()
