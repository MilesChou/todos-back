# todos-back

A todolist project for practice new language.

## Requirement

* [PHP][] 7.0
* [Composer][]
* [Make][] (optional)
* [Docker][] (optional)
* [Docker Compose][] (optional)

### Installation

[Install Composer](https://getcomposer.org/download/)

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

[Install Docker](https://www.docker.com/products/docker) (optional)

```bash
wget -qO- https://get.docker.com/gpg | sudo apt-key add -
wget -qO- https://get.docker.com/ | sh
```

[Install Docker Compose](https://github.com/docker/compose/releases/tag/1.7.1) (optional)

```bash
curl -L https://github.com/docker/compose/releases/download/1.7.1/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
```

## Make Usage

> The following commands require Make, Docker, Docker Compose

Services Start

```bash
make start
```

Services Stop

```bash
make start
```

Services Test

```bash
make test
```

[Composer]: https://getcomposer.org/
[Docker]: https://www.docker.com/
[Docker Compose]: https://docs.docker.com/compose/
[Make]: http://www.gnu.org/software/make/manual/make.html
[PHP]: http://php.net/
