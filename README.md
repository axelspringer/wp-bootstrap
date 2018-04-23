# WP Bootstrap

A simple pluggable framework for WordPress plugins.

## Getting Started

We provide an OOP for WordPress plugins. There are classes to construct settings pages, bootstrap code and general setup. They are found in the `AxelSpringer\WP\Bootstrap` namespace.

You can use the plugin and the bootstrap classes via

```
compose require axelspringer/wp-bootstrap
```

You do not have to necessarily enable the plugin to use the bootstrap code. But there is global shared helper `$wp_bootstrap` which provides many cool things.

## Development

We use [Docker Compose](https://docs.docker.com/compose/) to provide a local development environment across projects. The WordPress listen at [localhost:8181](http://localhost:8181/wp-admin). The progress is saved in docker volumes.

```
# Run
docker-compose up
```

# License
[MIT](/LICENSE)