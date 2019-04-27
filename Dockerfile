FROM debian:stretch-slim

# configuration
LABEL com.ldaws.fastmailzpush.version "2.4.5-1"
LABEL com.ldaws.fastmailzpush.version.upstream "2.4.5"
LABEL com.ldaws.fastmailzpush.version.revision "1"
VOLUME [ "/var/lib/z-push" ]
ENV EXPECTED_UID=1513 EXPECTED_GID=1513 FORWARDED_FOR_HEADER='X-Forwarded-For'

EXPOSE 80
CMD [ "bash", "/usr/bin/docker-entry" ]

RUN apt-get update && apt-get install -y \
  php-curl \
  php-xml \
  php-imap \
  libawl-php \
  php \
  php-soap \
  php-mbstring \
  libapache2-mod-php \
  && rm -rf /var/lib/apt/lists/*

COPY /vendor /vendor

# note: failures are expected
RUN dpkg -i /vendor/z-push-*.deb && rm -rf /vendor

COPY root /
