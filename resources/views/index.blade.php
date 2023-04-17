<div align="center">
    <form action="/checkout" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">

        <img src="{{ asset('assets/images/50dollars.png') }}" width="100"/>  
        
        <img src="{{ asset('assets/images/cloths.jpg') }}" width="300"/>   
        <br>
        <button type="Submit">
            
         
        
        <img src="{{ asset('assets/images/checkout.jpg') }}" width="150" />
        
        </button>
    
    </form>
</div>
