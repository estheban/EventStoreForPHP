# PROTOBUF


## Installing php-protobuf extension

First compile the extension:

```bash
$ git clone https://github.com/allegro/php-protobuf.git ~/php-protobuf && cd ~/php-protobuf
$ phpize
$ ./configure
$ sudo make && sudo make install
```

Then, enable the extension:

```bash
$ vim /etc/php5/conf.d/20-protobuf.ini
```

Add the following content in the file:

```ini
extension=/usr/lib/php5/20100525/protobuf.so
```

## Generating the php classes

```bash
$ php ~/php-protobuf/protoc-php.php -n /path/to/foo.proto
$ mv pb_proto_foo.php /path/to/your/project/whatever/foo.php
```
