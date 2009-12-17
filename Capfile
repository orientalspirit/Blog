load 'deploy' if respond_to?(:namespace) # cap2 differentiator
Dir['vendor/plugins/*/recipes/*.rb'].each { |plugin| load(plugin) }

load 'config/deploy' # remove this line to skip loading any of the default tasks
set :deploy_to, "/var/www/_blog"
set :user, "root"
set :use_sudo, false
ssh_options[:username] = 'root'
namespace :deploy do

 task :finalize_update do
    run "rm -rf #{latest_release}/config/database.php; ln -s #{shared_path}/config/database.php #{latest_release}/config/database.php"
    run "rm #{latest_release}/webroot/index.php; cp #{shared_path}/webroot/index.php #{latest_release}/webroot/index.php"
    run "rm -rf #{latest_release}/tmp/models/*"
    run "rm -rf #{latest_release}/tmp/persistent/*"
#    run "chmod -R 777 #{latest_release}/tmp"
  end

end
