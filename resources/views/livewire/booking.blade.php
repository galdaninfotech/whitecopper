<div>
    <div class="column medium-6 separator left">
        <div class="wrapper pt40 pb40 pl90 pr90">
            @if(Session::has('success'))
                <div class="alert alert-success" style="color: green; font-size: 15px; font-weight: bold;">
                    {{Session::get('success')}}
                </div>
            @endif                                                
            <form wire:submit="sendMail" class="form contact-form" id="contact-form" >
                {{ csrf_field() }}
                <div class="wrapper mb10 pr">
                    <input wire:model.live="name" type="text" placeholder="Name" class="input required dark pt20 pb20" name="name" title="name" value="{{ old('name') }}" >
                    <div>
                        @error('name') <span class="error">{{ $message }}</span> @enderror 
                    </div>
                    
                </div>
                <div class="wrapper mb10 pr error">
                    <input wire:model.blur="email" type="text" placeholder="E-mail" class="input required dark pt20 pb20" name="email" title="email" value="{{ old('email') }}" >
                    <div>
                        @error('email') <span class="error">{{ $message }}</span> @enderror 
                    </div>
                </div>
                <div class="wrapper mb40 pr error">
                    <textarea wire:model="message" placeholder="Leave a message here" class="textarea required dark pt20 pb20" name="message" >{{ old('message') }}</textarea>
                    <div>
                        @error('message') <span class="error">{{ $message }}</span> @enderror 
                    </div>
                </div>
                <div class="wrapper ac">
                    <div id="captcha"></div>
                    <input type="text" placeholder="Enter Captcha" id="cpatchaTextBox"/>
                    
                    <style>
                        canvas{
                            /*prevent interaction with the canvas*/
                            pointer-events:none;
                        }
                    </style>
                    <button type="submit">Send Message</button>
                    <!-- <input id="cfg-element-16-5" class="cfg-submit " type="submit" value="Send" name="cfg-element-16-5"> -->
                
                    <div wire:loading> Sending mail... </div>
                </div>
            </form>
        </div>
    </div>
</div>