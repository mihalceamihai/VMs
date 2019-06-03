Vagrant.configure("2") do |config|

    config.vm.box = 'maier/alpine-3.6-x86_64'
    config.vm.provider :virtualbox do |vb|
        vb.customize ['modifyvm', :id, '--natdnshostresolver1', 'on']
    end

    config.vm.define 'web' do |web|
        
        ENV['LC_ALL']='en_US.UTF-8'
	
	web.vm.network "forwarded_port", guest: 80, host: 8080
	web.vm.network 'private_network', ip: '10.0.0.10', auto_config: false

	web.vm.provision :shell do |shell|
      	   shell.inline = <<-SHELL
        	sudo su
		apk update && apk upgrade
		apk add apache2 
       		apk add php7 php7-fpm php7-opcache
		apk add php7-gd php7-mysqli php7-zlib php7-curl php7-session 
        	apk add php7-apache2
		rc-update add apache2 default
		rc-update add php-fpm7 default
		rc-service apache2 restart
		rc-service php-fpm7 restart
		rm /var/www/localhost/htdocs/index.html
        	cp -dr /vagrant/tema_web /var/www/localhost/htdocs/
		cat /vagrant/apache_eth1.txt >> /etc/network/interfaces
		/etc/init.d/networking restart	
      SHELL
  end

    end

    config.vm.define 'db' do |db|
       
        ENV['LC_ALL']='en_US.UTF-8'

	db.vm.synced_folder "./", "/dbinit.d"
	db.vm.network "forwarded_port", guest: 3306, host: 3306
	db.vm.network 'private_network', ip: '10.0.0.11', auto_config: false
	
      	db.vm.provision :shell do |shell|
      	#shell.env = {MYSQL_ROOT_PASS:ENV['111111']}
      	shell.inline = <<-SHELL
		sudo su
		apk update && apk upgrade
		apk add mysql mysql-client
  		cp /dbinit.d/my.cnf /etc/mysql/my.cnf
		cp /dbinit.d/startup.sh /vagrant/
		cp /dbinit.d/startup.sh /
		cat /dbinit.d/mysql_eth1.txt >> /etc/network/interfaces
		/etc/init.d/networking restart
		#export MYSQL_ROOT_PASSWORD=${MYSQL_ROOT_PASS}
		#echo ----------
		#echo $MYSQL_ROOT_PASSWORD
		#MYSQL_DATABASE=automosmobile
		#MYSQL_USER=mosu
		#MYSQL_PASSWORD=123
		#MYSQL_ROOT_PASSWORD=111111
		/bin/sh /startup.sh		
    	 SHELL
  	end	

    end

end
