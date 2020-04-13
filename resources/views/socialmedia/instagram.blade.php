                @foreach ($modules as $module)
                    @include('socialmedia.'.$module->value)
                @endforeach
