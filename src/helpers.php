<?php

if ( ! function_exists( 'remove_protocol' ) )
{
    function remove_protocol( $url, $replace = array('http://www.', 'http://', 'https://', 'https://www.', '/') )
    {
        return str_replace( $replace, '', $url );
    }

}

if ( ! function_exists( 'assets_path' ) )
{
    function assets_path( $path = '' )
    {
        return app( 'path.assets' ).( $path ? '/' . $path : $path );
    }

}

if ( ! function_exists( 'minified' ) )
{
    /**
     * A Minified version for you assets
     * @return mixed
     */
    function minified()
    {
        if( ! getenv('minified') )
        {
            return 'min.';
        }
        if( ! app()->make('config')->get('app.debug') )
        {
            return 'min.';
        }
        if( ! app()->make('env') === 'local' )
        {
            return 'min.';
        }
    }
}


if ( ! function_exists( 'extension_path' ) )
{
    /**
     * Get the path to the application folder.
     *
     * @param   string  $path
     * @return  string
     */
    function extension_path( $path = '' )
    {
        return app( 'path.extensions' ).( $path ? '/' . $path : $path );
    }
}

