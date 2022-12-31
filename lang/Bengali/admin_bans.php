<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'		=>	'এই ব্যবহারকারীর নাম অনুসারে কোনও ব্যবহারকারী নিবন্ধিত হয়নি। আপনি যদি কোনো নির্দিষ্ট ব্যবহারকারীর নামের সাথে আবদ্ধ না হওয়া কোনও ব্যান যুক্ত করতে চান তবে কেবল ব্যবহারকারীর নামটি খালি রেখে দিন।',
'No user ID message'		=>	'এই আইডি দ্বারা কোনো ব্যবহারকারী নিবন্ধিত হয়নি।',
'User is admin message'		=>	'ব্যবহারকারী %s একজন প্রশাসক এবং নিষিদ্ধ করা যাবে না। আপনি যদি কোনও প্রশাসককে নিষিদ্ধ করতে চান তবে আপনাকে অবশ্যই প্রথমে তাকে পদচ্যুত করতে হবে।',
'User is mod message'		=>	'ব্যবহারকারী %s একজন মডারেটর এবং নিষিদ্ধ করা যাবে না। আপনি যদি কোনও মডারেটরকে নিষিদ্ধ করতে চান তবে আপনাকে অবশ্যই প্রথমে তাকে পদচ্যুত করতে হবে।',
'Must enter message'		=>	'আপনাকে অবশ্যই একটি ব্যবহারকারীর নাম, একটি আইপি ঠিকানা বা একটি ইমেল ঠিকানা (কমপক্ষে) প্রবেশ করাতে হবে।',
'Cannot ban guest message'	=>	'অতিথি ব্যবহারকারীকে নিষিদ্ধ করা যাবে না।',
'Invalid IP message'		=>	'আপনি একটি অগ্রহণযোগ্য IP/IP-পরিসর প্রবেশ করিয়েছেন।',
'Invalid e-mail message'	=>	'আপনার প্রবেশ করানো ইমেল ঠিকানা (যেমন user@domain.com) বা আংশিক ইমেল ঠিকানা ডোমেইন (উদাঃ domain.com) অগ্রহণযোগ্য।',
'Duplicate domain message'	=>	'%s ডোমেইনটি ইতিমধ্যে নিষিদ্ধ করা হয়েছে।',
'Duplicate e-mail message'	=>	'ইমেল ঠিকানা %s ইতিমধ্যে নিষিদ্ধ করা হয়েছে।',
'Invalid date message'		=>	'আপনি একটি অগ্রহণযোগ্য মেয়াদ শেষ হওয়ার তারিখ প্রবেশ করিয়েছেন।',
'Invalid date reasons'		=>	'বিন্যাসটি YYYY-MM-DD হওয়া উচিত এবং তারিখটি অবশ্যই কমপক্ষে এক দিন হতে হবে।',
'Ban added redirect'		=>	'ব্যান যোগ করেছেন। রিডাইরেক্ট করা হচ্ছে...' ,
'Ban edited redirect'		=>	'ব্যান সম্পাদিত। রিডাইরেক্ট করা হচ্ছে...',
'Ban removed redirect'		=>	'ব্যান প্রত্যাহার করা হয়েছে। রিডাইরেক্ট করা হচ্ছে...',

'New ban head'			=>	'নতুন ব্যান',
'Add ban subhead'		=>	'ব্যান যোগ করুন',
'Username label'		=>	'ব্যবহারকারীর নাম',
'Username help'			=>	'নিষিদ্ধ করার জন্য ব্যবহারকারীর নাম (কেস-অসংবেদনশীল)।',
'Username advanced help'	=>	'নিষিদ্ধ করার জন্য ব্যবহারকারীর নাম (কেস-অসংবেদনশীল)। পরবর্তী পৃষ্ঠাটি আপনাকে একটি কাস্টম আইপি এবং ইমেল প্রবেশ করতে দেবে। আপনি যদি কেবল একটি নির্দিষ্ট  IP/IP-পরিসীমা বা ইমেল নিষিদ্ধ করতে চান তবে এটি খালি ছেড়ে দিন।',

'Ban search head'		=>	'ব্যান অনুসন্ধান করুন',
'Ban search subhead'		=>	'অনুসন্ধানের মানদণ্ড লিখুন',
'Ban search info'		=>	'ডাটাবেসে ব্যান অনুসন্ধান করুন। আপনি অনুসন্ধান করতে এক বা একাধিক পদ প্রবেশ করতে পারেন। তারকাচিহ্ন (*) আকারে ওয়াইল্ডকার্ডগুলি গ্রহণ করা হয়। সমস্ত নিষেধাজ্ঞা দেখানোর জন্য সমস্ত ক্ষেত্র খালি রেখে দিন।',
'Date help'			=>	'(yyyy-mm-dd)',
'Message label'			=>	'বার্তা',
'Expire after label'		=>	'মেয়াদ শেষ হওয়ার পরে',
'Expire before label'		=>	'মেয়াদ শেষ হওয়ার আগে',
'Order by label'		=>	'লেবেল অনুযায়ী অর্ডার করুন',
'Order by username'		=>	'ব্যবহারকারীর নাম অনুযায়ী অর্ডার করুন',
'Order by ip'			=>	'IP দ্বারা অর্ডার করুন ',
'Order by e-mail'		=>	'ইমেল দ্বারা অর্ডার করুন',
'Order by expire'		=>	'মেয়াদ শেষ হওয়ার তারিখ',
'Ascending'			=>	'ঊর্ধ্বমুখী',
'Descending'			=>	'অবনমন',
'Submit search'			=>	'অনুসন্ধান জমা দিন',

'E-mail label'			=>	'ইমেল',
'E-mail help'			=>	'আপনি যে ইমেল বা ইমেল ডোমেনটি নিষিদ্ধ করতে চান (যেমন someone@somewhere.com বা somewhere.com)। আরও তথ্যের জন্য অনুমতিগুলিতে "নিষিদ্ধ ইমেল ঠিকানাগুলি মঞ্জুর করুন" দেখুন।',
'IP label'			=>	'IP ঠিকানা/IP-রেঞ্জ',
'IP help'			=>	'আপনি যে আইপি ঠিকানা বা আইপি-রেঞ্জগুলি নিষিদ্ধ করতে চান (যেমন 150.11.110.1 বা 150.11.110)। স্পেস সহ পৃথক ঠিকানা। যদি একটি আইপি ইতিমধ্যে প্রবেশ করানো হয় তবে এটি ডাটাবেসে এই ব্যবহারকারীর শেষ পরিচিত আইপি।',
'IP help link'			=>	'এই ব্যবহারকারীর জন্য IP পরিসংখ্যান দেখতে %s -এ ক্লিক করুন।',
'Ban advanced head'		=>	'ব্যান উন্নত সেটিংস ',
'Ban advanced subhead'		=>	'IP এবং ইমেল সম্পূরক ব্যান ',
'Ban message label'		=>	'বার্তা ব্যান',
'Ban message help'		=>	'একটি বার্তা যা নিষিদ্ধ ব্যবহারকারীর কাছে প্রদর্শিত হবে যখন সে বোর্ডটি পরিদর্শন করবে।',
'Message expiry subhead'	=>	'ব্যান বার্তা ও মেয়াদ শেষ হওয়া ',
'Ban IP range info'		=>	'একাধিক ব্যবহারকারীর একই আংশিক IP মেলে এমন সম্ভাবনার কারণে একটি IP-রেঞ্জ নিষিদ্ধ করার সময় আপনার খুব সতর্কতা অবলম্বন করা উচিত।',
'Expire date label'		=>	'মেয়াদ শেষ হওয়ার তারিখ',
'Expire date help'		=>	'যখন এই নিষেধাজ্ঞা স্বয়ংক্রিয়ভাবে অপসারণ করা উচিত সেটির তারিখ(বিন্যাস: yyyy-mm-dd)। ম্যানুয়ালি অপসারণ করতে খালি ছেড়ে দিন।',

'Results head'			=>	'অনুসন্ধানের ফলাফল',
'Results username head'		=>	'ব্যবহারকারীর নাম',
'Results e-mail head'		=>	'ইমেল',
'Results IP address head'	=>	'IP ঠিকানা/IP-রেঞ্জগুলি',
'Results expire head'		=>	'মেয়াদ শেষ হওয়ার তারিখগুলো',
'Results message head'		=>	'বার্তা',
'Results banned by head'	=>	'দ্বারা নিষিদ্ধ',
'Results actions head'		=>	'ক্রিয়াগুলি',
'No match'			=>	'কোনও মিল নেই',
'Unknown'			=>	'অজানা',

);
