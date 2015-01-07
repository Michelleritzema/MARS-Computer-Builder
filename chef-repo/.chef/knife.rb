# See https://docs.chef.io/config_rb_knife.html for more information on knife configuration options

current_dir = File.dirname(__FILE__)
log_level                :info
log_location             STDOUT
node_name                "mritzema"
client_key               "#{current_dir}/mritzema.pem"
validation_client_name   "hr_nl-validator"
validation_key           "#{current_dir}/hr_nl-validator.pem"
chef_server_url          "https://api.opscode.com/organizations/hr_nl"
cache_type               'BasicFile'
cache_options( :path => "#{ENV['HOME']}/.chef/checksums" )
cookbook_path            ["#{current_dir}/../cookbooks"]
