@if(isset($data->content))
<div class="ai-text-result scroll-down">
    <div class="ai-copy-icon">
        <button type="button" class="copy-button" title="copy" onclick="copyText()"><i class="feather icon-copy"></i></button>
    </div>
    <p id="myInput">{{$data->content ?? ''}}</p>
</div>
@endif

<script>
function copyText() {
    var copyText = document.getElementById("myInput");
    
    // Create a range object and select the text
    var range = document.createRange();
    range.selectNode(copyText);
    
    // Clear any existing selection and apply the new one
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    
    // Execute the "copy" command
    document.execCommand("copy");
    
    // Clear the selection and provide feedback
    window.getSelection().removeAllRanges();
    alert("Text copied to clipboard!");
}
</script>
