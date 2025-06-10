        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>
    {{-- content-wrapper --}}

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="/assets/fe/js/plugins.js"></script>
    <script src="/assets/fe/js/theme.js"></script>
    <script>
        document.addEventListener("contextmenu", function(e){
            e.preventDefault();
        }, false);
    </script>
    
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            fetch('/get-contact-nomor')
                .then(response => response.json())
                .then(data => {
                    whatsappchat.multipleUser({
                        selector: '#example_id',
                        users: data, // Data is already in the correct format from the API
                        headerMessage: '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mulai Percakapan via <strong>WhatsApp</strong>',
                        chatBoxMessage: 'Team replies in a minute',
                        color: '#25D366',
                    });
                })
                .catch(error => {
                    console.error('Error fetching WhatsApp Users:', error);
                });
        });
    </script>