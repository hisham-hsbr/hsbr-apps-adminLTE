        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b> Version</b> {{ $Application->data['app_version'] }}
            </div>
            <strong>Copyright &copy; {{ $Developer->data['starting_year'] }}-<?php echo date('Y'); ?> <a
                    href="{{ $Developer->data['website'] }}" target="_blank">{{ $Developer->data['name'] }}</a>.</strong>
            All rights reserved.
        </footer>
