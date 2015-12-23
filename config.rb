###
# Compass
###

# Change Compass configuration
# compass_config do |config|
#   config.output_style = :compact
# end

###
# Page options, layouts, aliases and proxies
###

# Per-page layout changes:
#
# With no layout
# page "/path/to/file.html", :layout => false
#
# With alternative layout
# page "/path/to/file.html", :layout => :otherlayout
#
# A path which all have the same layout
# with_layout :admin do
#   page "/admin/*"
# end

# Proxy pages (https://middlemanapp.com/advanced/dynamic_pages/)
# proxy "/this-page-has-no-template.html", "/template-file.html", :locals => {
#  :which_fake_page => "Rendering a fake page with a local variable" }

###
# Helpers
###

# Automatic image dimensions on image_tag helper
# activate :automatic_image_sizes

# Reload the browser automatically whenever files change
configure :development do
    activate :php
    activate :bower
    # activate :livereload
end

# Methods defined in the helpers block are available in templates
# helpers do
#   def some_helper
#     "Helping"
#   end
# end

set :css_dir, 'stylesheets'

set :js_dir, 'javascripts'

set :images_dir, 'images'

set :helper_dir, 'helper'

set :partials_desktop_Common_dir, 'src/desktop/Common'
set :partials_desktop_Admin_blank_dir, 'src/desktop/Admin/blank'
set :partials_desktop_Home_index_dir, 'src/desktop/Home'

set :partials_desktop_home, 'src/desktop/Home'
set :partials_desktop_home_eventsManagement_common, 'src/desktop/Home/EventsManagement/Events-common'
set :partials_desktop_home_eventsManagement, 'src/desktop/Home/EventsManagement'
set :partials_desktop_home_eventsManagement_events, 'src/desktop/Home/EventsManagement/Events'

set :partials_desktop_home_rtu_information, 'src/desktop/Home/RTU/Information'

set :partials_desktop_home_rmr_reportCost, 'src/desktop/Home/RMR/ReportCost'
set :partials_desktop_home_rmr_reportDeviceRepair, 'src/desktop/Home/RMR/ReportDeviceRepair'
set :partials_desktop_home_rmr_reportRTU, 'src/desktop/Home/RMR/reportRTU'
set :partials_desktop_home_rmr_searchRTU, 'src/desktop/Home/RMR/searchRTU'
set :partials_desktop_home_rmr_mapDMA, 'src/desktop/Home/RMR/mapDMA'


set :partials_desktop_Admin_administrator_member, 'src/desktop/Admin/administrator_member'
set :partials_desktop_Admin_administrator_accessPolicy, 'src/desktop/Admin/administrator_accessPolicy'


# Build-specific configuration
configure :build do
  # Any files you want to ignore:
  ignore '/javascripts/javascript-desktop-admin/*'
  ignore '/javascripts/javascript-desktop-admin.js.erb'
  ignore '/javascripts/javascript-flaty_theme/*'
  ignore '/javascripts/javascript-flaty_theme.js.erb'
  ignore '/javascripts/javascript-flaty_common/*'
  ignore '/javascripts/javascript-common/*'
  ignore '/javascripts/javascript-flaty_login/*'
  ignore '/javascripts/javascript-flaty_blank/*'
  ignore '/javascripts/javascript-flaty_index/*'
  ignore '/javascripts/javascript-home-rmr-reportCost/*'
  ignore '/javascripts/javascript-flaty_rmr_reportDeviceRepair/*'
  ignore '/javascripts/javascript-flaty_rmr_reportRTU/*'
  ignore '/javascripts/javascript-home-rmr-searchRTU/*'
  ignore '/javascripts/all.js'
  ignore '/javascripts/javascript-home-index_2015-11-19/*'
  ignore '/javascripts/javascript-home-index/*'
  ignore '/javascripts/javascript-mbk-home/*'
  ignore '/javascripts/javascript-mbk-home-events-management/*'
  ignore '/javascripts/javascript-mbk-home-events/*'
  ignore '/javascripts/javascript-flaty_rmr_searchRTU/*'
  ignore '/javascripts/javascript-flaty_rmr_searchRTU.js.erb'
  ignore '/javascripts/javascript-flaty_administrator_member/*'
  ignore '/javascripts/javascript-flaty_administrator_member.js.erb'
  ignore '/javascripts/javascript-flaty_administrator_accessPolicy/*'
  ignore '/javascripts/javascript-flaty_administrator_accessPolicy.js.erb'
  ignore '/javascripts/javascript-flaty_blank.js.erb'
  ignore '/javascripts/javascript-home-index.js.erb'
  ignore '/javascripts/javascript-unitTest-bootstrapWizard/*'
  

  ignore '/stylesheets/stylesheet-desktop-admin/*'
  ignore '/stylesheets/stylesheet-desktop-admin.css.erb'
  ignore '/stylesheets/stylesheet-flaty_theme/*'
  ignore '/stylesheets/stylesheet-flaty_common/*'
  ignore '/stylesheets/stylesheet-flaty_login/*'
  ignore '/stylesheets/stylesheet-flaty_blank/*'
  ignore '/stylesheets/stylesheet-flaty_index/*'
  ignore '/stylesheets/stylesheet-home-rmr-reportCost/*'
  ignore '/stylesheets/stylesheet-flaty_rmr_reportDeviceRepair/*'
  ignore '/stylesheets/stylesheet-flaty_rmr_reportRTU/*'
  ignore '/stylesheets/stylesheet-flaty_rmr_searchRTU/*'
  ignore '/stylesheets/stylesheet-flaty_theme.css.erb'
  ignore '/stylesheets/all.css'
  ignore '/stylesheets/hello.scss'
  ignore '/stylesheets/normalize.css'
  ignore '/stylesheets/stylesheet-mbk-home/*'
  ignore '/stylesheets/stylesheet-mbk-home-events-management/*'
  ignore '/stylesheets/stylesheet-mbk-home-events/*'
  ignore '/stylesheets/stylesheet-flaty_administrator_accessPolicy/*'
  ignore '/stylesheets/stylesheet-flaty_administrator_accessPolicy.css.erb'
  ignore '/stylesheets/stylesheet-flaty_administrator_member/*'
  ignore '/stylesheets/stylesheet-flaty_administrator_member.css.erb'
  ignore '/stylesheets/stylesheet-flaty_blank.css.erb'
  ignore '/stylesheets/stylesheet-flaty_index.css.erb'
  ignore '/stylesheets/stylesheet-unitTest-bootstrapWizard/*'

  ignore '/helper/bootstrap-wizard/*'
  ignore '/helper/jquery-validation/*'
  ignore '/helper/bootstrap-datepicker-thai/*'

  ignore '/src/app/*'
  
  


  # For example, change the Compass output style for deployment
  # activate :minify_css
  activate :php

  # Minify Javascript on build
  # activate :minify_javascript

  # Enable cache buster
  # activate :asset_hash

  # Use relative URLs
  activate :relative_assets


  # Or use a different image path
  # set :http_prefix, "/Content/images/"
end




# config.rb
# Add bower's directory to sprockets asset path
after_configuration do
  #@bower_config = JSON.parse(IO.read("#{root}.bowerrc"))
  #sprockets.append_path File.join "#{root}", @bower_config["directory"]

  sprockets.append_path File.join "#{root}", "bower_components"
  sprockets.append_path File.join "#{root}", "source"
  #sprockets.import_asset 'jquery'
end
