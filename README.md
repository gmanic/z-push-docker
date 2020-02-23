# docker Z-Push Image
(shamelessly forked from liamdawson - thank you :-) )

Use [Z-Push](http://z-push.org/) to sync Fastmail email, contacts and
calendars via Exchange ActiveSync (e.g. natively to an Android phone).

## Licensing

Z-Push is licensed under the AGPL v3, meaning you must make the source
code available to any users. Everything "original" here is licensed
under the MIT license.

## Usage

I tried to pre-set some sensible defaults, they work for my nextcloud,
dovecot, postfix setup. Your mileage might vary.

You need to set at least some values for the appropriate servers:
  - imap_server
  - imap_smtp_host
  - carddav_server
  - caldav_server

### docker-compose.yml

Here's an example **insecure** configuration. You should use this behind
a reverse proxy with SSL/TLS.

```yaml
version: '3.7'
services:
  zpush:
    image: gmaniac/z-push-nc-dovecot-postfix
    ports:
    - 80:80
    volumes:
    # state dir, keeps state between image reincarnations
    - /var/lib/z-push:/var/lib/z-push
    # optional, but necessary if you want to view the logs
    - /var/log/z-push:/var/log/z-push
```

## TODO

* [ ] Z-Push logs visible in Docker logs
* [ ] Prevent provisioning prompt
