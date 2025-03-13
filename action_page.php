<form action="javascript:void(0);" class="form-container" onsubmit="handleFormSubmission(event)">
  <h1>Chat</h1>
  <label for="msg"><b>Message</b></label>
  <textarea placeholder="Type message.." name="msg" required></textarea>
  <button type="submit" class="btn">Send</button>
  <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
</form>

<script>
  function handleFormSubmission(event) {
    event.preventDefault(); 
    const message = document.querySelector('textarea[name="msg"]').value;
    console.log("Message Sent: ", message); 
    closeForm(); 
</script>
