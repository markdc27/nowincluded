<?php 
    $encodedUrl = urlencode($post_url);
?>
<div class="content flex items-center<?php echo ' ' . $extra_classes; ?>">
    <div class="inline-flex space-x-2">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $encodedUrl; ?>" title="Share on Facebook" class="text-gray hover:text-magenta">
            <svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 11C0 4.925 4.925 0 11 0s11 4.925 11 11-4.925 11-11 11S0 17.075 0 11zm11-5.5c3.025 0 5.5 2.475 5.5 5.5a5.549 5.549 0 01-4.744 5.5v-3.919h1.306L13.338 11h-1.513V9.969c0-.413.206-.825.894-.825h.687V7.769s-.619-.138-1.237-.138c-1.238 0-2.063.756-2.063 2.131V11H8.731v1.581h1.375v3.85C7.494 16.02 5.5 13.75 5.5 11c0-3.025 2.475-5.5 5.5-5.5z" fill="currentColor"/></svg>
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo $encodedUrl; ?>" title="Share on Twitter" class="text-gray hover:text-magenta">
            <svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 11C0 4.925 4.925 0 11 0s11 4.925 11 11-4.925 11-11 11S0 17.075 0 11zm15.194-3.094c.481-.068.893-.137 1.306-.343a3.177 3.177 0 01-1.169 1.168c.138 3.232-2.2 6.738-6.393 6.738-1.238 0-2.407-.413-3.438-1.031 1.169.137 2.406-.207 3.231-.825A2.228 2.228 0 016.6 12.03c.344.069.688 0 1.031-.069-1.031-.274-1.787-1.237-1.787-2.268.343.137.687.275 1.031.275-.963-.688-1.306-1.994-.688-3.025 1.17 1.375 2.82 2.269 4.676 2.337-.344-1.375.756-2.75 2.2-2.75a2.4 2.4 0 011.65.688c.55-.138 1.03-.275 1.443-.55-.137.55-.481.962-.962 1.237z" fill="currentColor"/></svg>
        </a>
        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $encodedUrl; ?>" title="Share on LinkedIn" class="text-gray hover:text-magenta">
            <svg width="23" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M.188 11c0-6.075 4.924-11 11-11 6.075 0 11 4.925 11 11s-4.925 11-11 11c-6.076 0-11-4.925-11-11zm5.637-1.856V16.5h2.337V9.144H5.825zm-.138-2.338c0 .756.55 1.307 1.307 1.307.756 0 1.306-.55 1.306-1.307C8.3 6.05 7.75 5.5 6.994 5.5c-.688 0-1.306.55-1.306 1.306zM14.35 16.5h2.2v-4.537c0-2.27-1.375-3.025-2.681-3.025-1.169 0-1.994.756-2.2 1.237V9.144h-2.2V16.5h2.337v-3.919c0-1.031.688-1.581 1.375-1.581.688 0 1.169.344 1.169 1.512V16.5z" fill="currentColor"/></svg>
        </a>
        <a href="mailto:?body=<?php echo $encodedUrl; ?>" title="Share via email" class="text-gray hover:text-magenta">
            <svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="11" fill="currentColor"/><path d="M5.737 7.19c1.555 1.317 4.285 3.635 5.087 4.357a.508.508 0 00.343.147c.12 0 .235-.049.342-.146.803-.723 3.533-3.041 5.088-4.358a.236.236 0 00.033-.326.938.938 0 00-.74-.364H6.444c-.29 0-.56.133-.741.364a.236.236 0 00.033.326z" fill="#fff"/><path d="M16.696 8.404a.235.235 0 00-.251.034c-1.725 1.462-3.927 3.336-4.62 3.96a.956.956 0 01-1.318 0c-.738-.665-3.21-2.767-4.618-3.96a.236.236 0 00-.389.18v5.938c0 .52.424.944.944.944h9.445c.52 0 .944-.424.944-.944V8.618a.236.236 0 00-.137-.214z" fill="#fff"/></svg>
        </a>
        <a href="#" data-shareurl="<?php the_permalink(); ?>" id="CopyShare" title="Copy share url" class="text-gray hover:text-magenta">
            <svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="11" fill="currentColor"/><path d="M7.911 17c-.766 0-1.49-.304-2.049-.862a2.875 2.875 0 0 1-.86-2.158c.031-.833.407-1.633 1.088-2.314l1.226-1.231a.469.469 0 0 1 .665.661l-1.227 1.232c-.994.994-1.088 2.288-.229 3.147.86.859 2.153.765 3.146-.228l1.685-1.685c.51-.51.792-1.094.815-1.686a1.947 1.947 0 0 0-.587-1.46 2.077 2.077 0 0 0-.439-.337.469.469 0 1 1 .464-.814c.23.13.445.295.638.488.585.585.89 1.351.86 2.158-.03.833-.407 1.633-1.088 2.314l-1.685 1.685c-.68.68-1.481 1.057-2.314 1.088a3.039 3.039 0 0 1-.109.002Zm3.12-4.44a.469.469 0 0 0-.176-.64 2.078 2.078 0 0 1-.44-.336c-.858-.859-.764-2.153.229-3.146l1.685-1.685c.993-.993 2.287-1.087 3.146-.228.859.86.765 2.153-.229 3.147l-1.227 1.232a.469.469 0 1 0 .665.661l1.226-1.23c.68-.682 1.057-1.482 1.088-2.315a2.875 2.875 0 0 0-.86-2.158 2.876 2.876 0 0 0-2.158-.86c-.833.031-1.633.407-2.314 1.088L9.98 7.775c-.68.681-1.057 1.481-1.088 2.314-.03.807.275 1.573.86 2.158.193.193.407.357.638.488a.466.466 0 0 0 .64-.175Z" fill="#fff"/></svg>
        </a>
        <div class="w-full md:w-auto relative">
            <input id="CopyInput" type="text" class="hidden text-sm md:text-xs md:p-2 flex-initial top-0 bottom-0 right-100" value="">
        </div>
    </div>
</div>