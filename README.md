### Codeigniter-basic-cache-library

#Description

A simple cache library to save and retrieve contents.


#Requirements

*Codeigniter 2.1.3

#Usage

1) Put the file Cache.php in the application/libraries folder.

2) Load the library through the command below.
```sh
$this->load->library('cache')
```
It's ready to use:

There are two methods:

-Save
```sh
$this->cache->save($content_to_save, $file_name);
```


The first parameter is the content you want to save, the second (optional) is the name of the cache file. If you dont send a file name, the system will randomly generate and return it.

-Get
```sh
$this->cache->get($file_name);
```

