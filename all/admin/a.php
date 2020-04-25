<input type="button" name="Quit" id="Quit" value="Quit" onclick="return quitBox('quit');" />
<script>
function quitBox(cmd)
{   
    if (cmd=='quit')
    {
        open(location, '_self').close();
    }   
    return false;   
}
</script>