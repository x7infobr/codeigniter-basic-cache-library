# codeigniter-basic-cache-library
Codeigniter Basic Cache Library

#Requirements

*Codeigniter 2.1.3

#Usage

1) Put the file Cache.php in the application/libraries folder.

2) Load the library through the $this->load->library('cache') command.

It's ready to use:

There are two methods:

-Save
$this->cache->save($content_to_save, $file_name);

The first parameter is the content you want to save, the second (optional) is the name of the cache file. If you dont send a file name, the system will randomly generate and return it.

-Get
$this->cache->get($file_name);
