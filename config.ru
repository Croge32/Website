require 'rack/contrib/try_static'
require 'newrelic_rpm'
require 'new_relic/rack/agent_hooks'

use Rack::TryStatic,
    :root => "public",
    :urls => %w[/],
    :try => ['.html', 'home.html', 'ask.html', 'about.html', 'models.html', 'estimates.html']

use NewRelic::Rack::AgentHooks

run lambda { |env| [404, {'Content-Type' => 'text/plain'}, ['Not Found']] }