<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Web App Manifest Generator by Trhacknon</title>
    <link rel="manifest" href="manifest.json">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" type="image/png" sizes="512x512" href="res/icon_hi_res_512.png">
    <link rel="icon" type="image/png" sizes="512x512" href="res/icon_hi_res_512.png">
    <link rel="apple-touch-icon" type="image/png" sizes="512x512" href="res/icon_hi_res_512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="res/icon_xxxhdpi_192.png">
    <link rel="apple-touch-icon" type="image/png" sizes="192x192" href="res/icon_xxxhdpi_192.png">
    <link rel="icon" type="image/png" sizes="144x144" href="res/icon_xxhdpi_144.png">
    <link rel="apple-touch-icon" type="image/png" sizes="144x144" href="res/icon_xxhdpi_144.png">
    <link rel="icon" type="image/png" sizes="96x96" href="res/icon_xhdpi_96.png">
    <link rel="apple-touch-icon" type="image/png" sizes="96x96" href="res/icon_xhdpi_96.png">
    <link rel="icon" type="image/png" sizes="72x72" href="res/icon_hdpi_72.png">
    <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="res/icon_hdpi_72.png">
    <link rel="icon" type="image/png" sizes="48x48" href="res/icon_mdpi_48.png">
    <link rel="apple-touch-icon" type="image/png" sizes="48x48" href="res/icon_mdpi_48.png">

    <meta name="application-name" content="Manifest Generator by Trhacknon">
    <meta name="apple-mobile-web-app-title" content="Manifest Generator">
    <meta name="theme-color" content="#00f0ff">
    <meta name="msapplication-navbutton-color" content="#00f0ff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/appmanifest/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Web App Manifest Generator">
    <meta property="og:url" content="https://appmanif.onrender.com">
    <meta property="og:image" content="https://appmanif.onrender.com/res/icon_hi_res_512.png">
    <meta property="og:description" content="Web App Manifests are one of the key pieces to making your web app look and feel like a native app.">
    <meta name="google-site-verification" content="pm16X4unG20cGNq-54H814A7supSec9OFjhzzcss3ts" />

    <link rel="canonical" href="https://tomitm.github.io/appmanifest/" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.0.0-alpha.2/dist/css/bootstrap.min.css"
          integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="preload" as="style" onload="this.rel='stylesheet'"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <noscript>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    </noscript>
    <style media="screen">
      body {
        margin-top: 75px;
        background-color: #000;
        color: #00f0ff;
        font-family: 'Courier New', Courier, monospace;
      }

      .navbar {
        background-color: #000;
        color: #00f0ff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.6);
      }

      .navbar-brand {
        color: #00f0ff !important;
      }

      .navbar-nav .nav-link {
        color: #00f0ff !important;
      }

      .card {
        background-color: #111;
        color: #00f0ff;
        border: 1px solid #222;
      }

      .btn-collapse {
        color: #00f0ff;
      }

      .btn-copy {
        color: #00f0ff;
      }

      .output {
        background-color: #111;
        color: #00f0ff;
        border: 1px solid #222;
      }

      #messages .message {
        background-color: rgba(0, 255, 255, .9);
        color: #000;
        box-shadow: 0 2px 5px rgba(0,0,0,0.6);
      }

      .footer {
        border-top: 1px solid #222;
        padding: 30px 10px;
        margin-top: 15px;
        color: #00f0ff;
      }

      .footer a {
        color: #00f0ff;
      }

      .form-control {
        background-color: #222;
        color: #00f0ff;
        border: 1px solid #333;
      }

      .form-control::placeholder {
        color: #777;
      }

      .table {
        color: #00f0ff;
      }

      .table th,
      .table td {
        border: 1px solid #333;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-fixed-top navbar-dark">
      <a class="navbar-brand hidden-xs-down">Web App Manifest Generator</a>
      <a class="navbar-brand hidden-sm-up">Manifest Generator</a>
      <ul class="nav navbar-nav pull-xs-right">
        <li class="nav-item hidden-xs-down">
          <a class="nav-link" href="https://developer.mozilla.org/en-US/docs/Web/Manifest" target="_blank" rel="noopener" title="Quick reference on MDN">MDN</a>
        </li>
        <li class="nav-item hidden-xs-down">
          <a class="nav-link" href="https://www.w3.org/TR/appmanifest/" target="_blank" rel="noopener" title="Read the W3 specification">Spec</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/tucommenceapousser/appmanifest" target="_blank" rel="noopener" title="View project on Github"><i class="fa fa-github fa-fw fa-lg"></i></a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p>
            <i class="fa fa-magic"></i>
            Web App Manifests are one of the key pieces to making your web app look and feel like a native app. <a href="https://web.dev/learn/pwa/web-app-manifest/" target="_blank" rel="noopener">Learn more</a>
            <br />
            <small>While everything is optional, once certain <a href="https://web.dev/install-criteria/" target="_blank" rel="noopener">criteria</a> is met, some browsers will automatically display an install banner for your app</small>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <form autocomplete="off">

            <div class="card">
              <div class="card-block">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Web App Manifest Generator" />
                  <small class="text-muted">Name of your web app</small>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" name="description" id="description" placeholder="A generator to help developers create Web App Manifests" />
                  <small class="text-muted">The purpose of your web app</small>
                </div>

                <span class="collapse" id="more-name">
                  <div class="form-group">
                    <label for="short_name">Short Name</label>
                    <input type="text" class="form-control" name="short_name" id="short_name" placeholder="App Manifest" />
                    <small class="text-muted">This will be used when there is insufficient space to display the full name, such as the homescreen</small>
                  </div>
                  <div class="form-group">
                    <label for="start_url">Start URL</label>
                    <input type="text" class="form-control" name="start_url" id="start_url" placeholder="/" value="/" />
                    <small class="text-muted">Your homescreen shortcut will load this URL</small>
                  </div>
                  
                  <div class="form-group">
                    <label for="scope">Scope</label>
                    <input type="text" class="form-control" name="scope" id="scope" placeholder="/" />
                    <small class="text-muted">The scope of your domain that this manifest applies to</small>
                  </div>
                  <div class="form-group">
                    <label for="lang">Language</label>
                    <input type="text" class="form-control" name="lang" id="lang" placeholder="en" value="en"/>
                    <small class="text-muted">The primary language for the name, short name and description properties. For example, en or en-CA</small>
                  </div>
                </span>
                <a class="btn btn-link btn-sm btn-collapse text-muted" data-toggle="collapse" data-target="#more-name">More...</a>
              </div>
            </div>


            <div class="card">
              <div class="card-block">
                <div class="form-group">
                  <label for="theme_color">Theme color</label>
                  <input type="text" class="form-control form-control-color" name="theme_color" id="theme_color" placeholder="#0275d8" />
                  <small class="text-muted">Color used in the browser and system UI, to help make your app immersive</small>
                </div>

                <div class="form-group">
                  <label for="display">Display</label>
                  <div class="radio"><label>
                    <input type="radio" name="display" value="standalone" checked />
                    Standalone
                    <div class="text-muted">An app-like experience, no browser UI, only system UI</div>
                  </label></div>
                  <div class="radio"><label>
                    <input type="radio" name="display" value="fullscreen" />
                    Fullscreen
                    <div class="text-muted">No browser or system UI shown</div>
                  </label></div>
                  <div class="radio"><label>
                    <input type="radio" name="display" value="minimal-ui" />
                    Minimal UI
                  </label></div>
                  <div class="radio"><label>
                    <input type="radio" name="display" value="browser" />
                    Browser
                  </label></div>
                </div>

                <span class="collapse" id="more-display">
                  <div class="form-group">
                    <label for="background_color">Background color</label>
                    <input type="text" class="form-control form-control-color" name="background_color" id="background_color" placeholder="#fff" />
                    <small class="text-muted">This is typically your <code>&lt;body&gt;</code> background color, used to set the background color until the stylesheets for your app are loaded.</small>
                  </div>

                  <div class="form-group">
                    <label for="orientation">Orientation</label>
                    <select class="form-control c-select" name="orientation" id="orientation">
                      <option value="">Select Orientation</option>
                      <option value="any">Any</option>
                      <option value="natural">Natural</option>
                      <option value="landscape">Landscape</option>
                      <option value="landscape-primary">Landscape (Primary)</option>
                      <option value="landscape-secondary">Landscape (Secondary)</option>
                      <option value="portrait">Portrait</option>
                      <option value="portrait-primary">Portrait (Primary)</option>
                      <option value="portrait-secondary">Portrait (Secondary)</option>
                    </select>
                  </div>
                </span>
                <a class="btn btn-link btn-sm btn-collapse text-muted" data-toggle="collapse" data-target="#more-display">More...</a>
              </div>
            </div>

            <div class="card">
              <div class="card-block">
                <label>Icons</label>
                <table class="table table-sm" id="icons">
                  <thead>
                    <tr>
                      <th>URL</th>
                      <th>Sizes</th>
                      <th>Type</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <label class="sr-only" for="icons_0_src">URL</label>
                        <input type="text" class="form-control form-control-sm" id="icons_0_src"
                            name="icons[0][src]" placeholder="homescreen.png" />
                      </td>
                      <td>
                        <label class="sr-only" for="icons_0_sizes">Sizes</label>
                        <input type="text" class="form-control form-control-sm" id="icons_0_sizes"
                            name="icons[0][sizes]" placeholder="192x192" />
                      </td>
                      <td>
                        <label class="sr-only" for="icons_0_type">Type</label>
                        <input type="text" class="form-control form-control-sm" id="icons_0_type"
                            name="icons[0][type]" placeholder="image/png" />
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4"><a class="btn btn-link btn-sm" id="add_icons">Add another...</a></td>
                    </tr>
                  </tbody>
                </table>

                <span class="collapse" id="more-apps">
                  <label>Shortcuts <i class="fa fa-flask"></i></label>
                  <table class="table table-sm" id="shortcuts">
                    <thead>
                      <tr>
                        <th>URL</th>
                        <th>Name</th>
                        <th>Short Name</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <label class="sr-only" for="screenshots_0_url">URL</label>
                          <input type="text" class="form-control form-control-sm" id="screenshots_0_url"
                              name="screenshots[0][url]" placeholder="/settings" />
                        </td>
                        <td>
                          <label class="sr-only" for="screenshots_0_name">Name</label>
                          <input type="text" class="form-control form-control-sm" id="screenshots_0_name"
                              name="screenshots[0][name]" placeholder="App Settings" />
                        </td>
                        <td>
                          <label class="sr-only" for="screenshots_0_short_name">Short Name</label>
                          <input type="text" class="form-control form-control-sm" id="screenshots_0_short_name"
                              name="screenshots[0][short_name]" placeholder="Settings" />
                        </td>
                        <td>
                          <label class="sr-only" for="screenshots_0_description">Description</label>
                          <input type="text" class="form-control form-control-sm" id="screenshots_0_description"
                              name="screenshots[0][description]" placeholder="Edit your settings" />
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4"><a class="btn btn-link btn-sm" id="add_shortcuts">Add another...</a></td>
                      </tr>
                    </tbody>
                  </table>

                  <label>Protocol Handlers <i class="fa fa-flask"></i></label>
                  <table class="table table-sm" id="handlers">
                    <thead>
                      <tr>
                        <th>Protocol</th>
                        <th>URL</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <label class="sr-only" for="handlers_0_protocol">Protocol</label>
                          <input type="text" class="form-control form-control-sm" id="handlers_0_protocol"
                              name="handlers[0][protocol]" placeholder="web+search" />
                        </td>
                        <td>
                          <label class="sr-only" for="handlers_0_url">URL</label>
                          <input type="text" class="form-control form-control-sm" id="handlers_0_url"
                              name="handlers[0][url]" placeholder="/search?q=%s" />
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4"><a class="btn btn-link btn-sm" id="add_handlers">Add another...</a></td>
                      </tr>
                    </tbody>
                  </table>
                </span>
                
                <a class="btn btn-link btn-sm btn-collapse text-muted" data-toggle="collapse" data-target="#more-apps">More...</a>
              </div>
            </div>

            <div class="card">
              <div class="card-block">
                <label>Screenshots</label>
                <table class="table table-sm" id="screenshots">
                  <thead>
                    <tr>
                      <th>URL</th>
                      <th>Sizes</th>
                      <th>Type</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <label class="sr-only" for="screenshots_0_src">URL</label>
                        <input type="text" class="form-control form-control-sm" id="screenshots_0_src"
                            name="screenshots[0][src]" placeholder="screenshots/in-app.png" />
                      </td>
                      <td>
                        <label class="sr-only" for="screenshots_0_sizes">Sizes</label>
                        <input type="text" class="form-control form-control-sm" id="screenshots_0_sizes"
                            name="screenshots[0][sizes]" placeholder="1280x920" />
                      </td>
                      <td>
                        <label class="sr-only" for="screenshots_0_type">Type</label>
                        <input type="text" class="form-control form-control-sm" id="screenshots_0_type"
                            name="screenshots[0][type]" placeholder="image/png" />
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4"><a class="btn btn-link btn-sm" id="add_screenshots">Add another...</a></td>
                    </tr>
                  </tbody>
                </table>
                
                <span class="collapse" id="more-store">
                  <label>Related applications</label>
                  <table class="table table-sm" id="related_applications">
                    <thead>
                      <tr>
                        <th>Platform</th>
                        <th>App ID</th>
                        <th>URL</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <label class="sr-only" for="related_0_platform">Platform</label>
                          <input type="text" class="form-control form-control-sm" id="related_0_platform"
                                  name="related_applications[0][platform]" placeholder="play" />
                        </td>
                        <td>
                          <label class="sr-only" for="related_0_id">ID</label>
                          <input type="text" class="form-control form-control-sm" id="related_0_id"
                                  name="related_applications[0][id]" placeholder="com.example.app" />
                        </td>
                        <td>
                          <label class="sr-only" for="related_0_url">URL</label>
                          <input type="text" class="form-control form-control-sm" id="related_0_url"
                                  name="related_applications[0][url]"
                                  placeholder="https://play.google.com/store/apps/details?id=com.example.app1" />
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4"><a class="btn btn-link btn-sm" id="add_related_applications">Add another...</a></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                    <label>
                      <input type="checkbox" name="prefer_related_applications" id="prefer_related_applications" />
                      Prefer related applications
                      <br />
                      <small class="text-muted">Whether to show the native app banner before the web app install banner</small>
                    </label>
                  </div>
                </span>
                <a class="btn btn-link btn-sm btn-collapse text-muted" data-toggle="collapse" data-target="#more-store">More...</a>
              </div>
            </div>

        </form>
      </div>
      <div class="col-md-5">
        <div class="card output">
          <div class="card-block">
            <a class="btn-copy" id="copy_manifest">Copy</a>
            <strong>manifest.json</strong>
            <pre id="output_manifest"></pre>
          </div>
        </div>
        <div class="card output">
          <div class="card-block">
            <a class="btn-copy" id="copy_head">Copy</a>
            <strong>&lt;head&gt;</strong>
            <pre id="output_head"></pre>
          </div>
        </div>
        <div class="card">
          <div class="card-block" id="notes">
            <h5 class="card-title">Helpful notes</h5>
            <ul>
              <li>Browsers will automatically display an install banner for your web app when it meets certain <a href="https://web.dev/install-criteria/" target="_blank" rel="noopener">criteria</a></li>
              <li>You can append a parameter to your start URL to detect when your app is launched from homescreen, or you can use the <code><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@media/display-mode" target="_blank" rel="noopener">display-mode</a></code> CSS media query</li>
              <li>For games, you can set fullscreen display and landscape orientation</li>
              <li>If your app is under a subdirectory (such as this one), make sure you set <code>start_url</code> and <code>scope</code> to that directory, otherwise launching will default to <code>/</code></li>
              <li>Not all browsers implement the manifest yet, however the <code>&lt;meta&gt;</code> tags will help bridge that gap</li>
              <li>You can even link to your native app as a related app and get the benefit of the install banner</li>
              <li>To determine if the install prompt was successful, or defer it, use the <code><a href="https://web.dev/customize-install/#beforeinstallprompt">beforeinstallprompt</a></code> event</li>
              <li>Make sure to add a <a href="https://web.dev/learn/pwa/service-workers/" target="_blank" rel="noopener">Service Worker</a> so that your app can work offline and even send notifications</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <small>Built by <a href="https://github.com/tucommenceapousser" target="_blank" rel="noopener">trhacknon</a> and contributors</small>
    </footer>
  </div>
  <div id="messages"></div>
  <script src="index.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl4+z1j3d5gFfsF1j6aL3LJ9+1p9eETr/YXz9Fu6iFZ" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-3w2k4LZ8DrZB0hl1nSk8wIn9OS8IT7o5mH5gAf3bILF5tvwof26D4Mt0J9NViYhL" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/dist/js/bootstrap.min.js" integrity="sha384-1M4Hf1WBzSRA+f2PjYoCM6Rk4w6RVZAcj58udO92zVyyCCnDiycb1nW6h6LZW5Qd" crossorigin="anonymous"></script>
</body>
</html>
