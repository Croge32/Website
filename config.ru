require 'rack/contrib/try_static'

use Rack::TryStatic,
    :root => "public",
    :urls => %w[/],
    :try => ['.html', 'home.html', 'ask.html', 'about.html', 'models.html', 'estimates.html']

run lambda { |env| [404, {'Content-Type' => 'text/plain'}, ['Not Found']] }
