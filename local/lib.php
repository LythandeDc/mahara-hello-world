function local_sideblocks_update(&$SIDEBLOCKS)
{

    $hello = 'Hello World';

    // Initiation of the block
    if (defined('MENUITEM') && MENUITEM != '') {

        /*================================
         Hello Test
         ================================*/
        $SIDEBLOCKS[] = array(
            'name' => 'hello',
            'id' => 'sb-hello',
            'weight' => 20,
            'data' => array('hello' => $hello),
        );

    }
}
