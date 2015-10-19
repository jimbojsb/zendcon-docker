FROM phusion/baseimage:0.9.17

ENV HOME /root

CMD ["/site/docker/serve.sh"]

ENV PATH /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin

RUN locale-gen --no-purge en_US.UTF-8
ENV LC_ALL en_US.UTF-8
ENV LANG en_US.UTF-8
ENV DEBIAN_FRONTEND noninteractive

RUN echo "America/Chicago" > /etc/timezone
RUN dpkg-reconfigure -f noninteractive tzdata

RUN apt-add-repository -y ppa:ondrej/php5-5.6
RUN apt-get update
RUN apt-get install -qqy --force-yes php5-cli php5-common php5-fpm php5-mysql php5-curl php5-gd ca-certificates nginx

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

EXPOSE 80

ADD . /site