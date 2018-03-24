<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>

    <body>
        <div class="bg-pattern fixed pin z-0"></div>

        <div class="relative z-10" id="app" v-cloak>
            <div class="mx-auto h-full bg-white shadow-lg" style="max-width: 1680px">
                <header class="z-20 pin-t w-full fixed border-b bg-white" style="height: 63px; max-width: 1680px">
                    <div class="inline-block w-full bg-brand h-1 absolute pin-t"></div>
                    <nav class="mx-auto px-4 uppercase h-full" style="max-width: 1200px">
                        <div class="flex items-center h-full">
                            <div class="w-1/4 text-left">
                                <a class="inline-block text-left" href="/">
                                    <span class="font-display uppercase font-black tracking-wide text-xl">Suite3</span>
                                </a>
                            </div>

                            <div class="flex-1 text-right">
                                <span class="inline-block text-right px-2 font-medium normal-case cursor-default">
                                    Demo
                                    <i class="inline-block ml-2 roman text-xs border rounded-full px-2 opacity-75">Coming Soon</i>
                                </span>

                                <a class="inline-block text-right px-2 font-medium normal-case" href="#features">
                                    Features
                                </a>

                                <a class="inline-block text-right px-2 font-medium normal-case" href="#pricing">
                                    Pricing
                                </a>

                                <a class="inline-block text-right px-2 font-medium normal-case" href="#signup">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </nav>
                </header>

                <main class="relative z-10 inline-block w-full" style="margin-top: 63px">
                    <div class="px-8 xl:px-32 py-16 inline-block w-full mx-auto">
                        <div class="inline-block w-1/35">
                            <span class="inline-block w-full text-left font-semibold mb-2 leading-tight uppercase opacity-50 text-sm">
                                Coming Soon
                            </span>

                            <h1 class="inline-block w-full text-left text-4xl font-semibold mb-4 leading-tight">
                                The mission suite<br />for Arma communities.
                            </h1>

                            <div class="inline-block w-full text-left text-lg font-medium mb-8 opacity-75 leading-loose">
                                Take your community to the next level with <strong>automated mission testing</strong>, intel, discussions, media, forums, applications, and a swish landing page to attract new members.
                            </div>

                            <signup>
                                <div slot-scope="{ signup, inputAttrs, inputEvents, error, complete }" class="inline-block w-full text-left">
                                    <div v-if="!complete">
                                        <input type="email" v-bind="inputAttrs" v-on="inputEvents" class="rounded-full signup-email w-auto mr-4 float-left text-center no-outline" placeholder="johndoe@example.com">
                                        <button class="btn btn-hero btn-xl btn-primary" @click.prevent="signup">Sign Up</button>
                                        <span class="inline-block w-full text-sm mt-2 text-brand font-medium">@{{ error }}</span>
                                    </div>

                                    <div v-else>
                                        <div class="inline-block w-full text-brand">
                                            <div class="float-left mr-4">@svg('tick')</div>
                                            <span class="font-medium">Thanks for signing up!</span>
                                        </div>
                                    </div>
                                </div>
                            </signup>
                        </div>

                        <div class="inline-block w-3/5 pl-8 float-right">
                            <img class="rounded-xl" src="{{ url('/images/product.png') }}">
                        </div>

                        <grid id="features" class="mt-18" thirds gap="3rem" auto-rows="max-content">
                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('lab')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">Automated Testing</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    Each mission goes through a series of tests to ensure it has the necessary files, valid config syntax, no duplicate ID's, loadout checks, and lots more.
                                </p>
                            </div>

                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('news')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">Integrated Forums</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    Hate using old and ugly forums? We do too. We've built our forum from scratch to be both quick without page refreshes, and customisable for every community.
                                </p>
                            </div>

                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('bubble')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">After-Action Reports</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    Discuss your experience and provide useful feedback for the mission maker. This feedback loop is key to improving mission quality.
                                </p>
                            </div>

                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('camera')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">Photos &amp; Video</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    Upload your satellite images, war photos, and embed your YouTube videos. Don't let your memorable moments get lost or forgotten elsewhere.
                                </p>
                            </div>

                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('paperplane')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">Application Management</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    Elegantly manage new members with categorisation and preset response emails. Just a couple of clicks from accepting a new member into the group.
                                </p>
                            </div>

                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('calendar')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">Scheduled Operations</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    Create your community events, choose which missions you'll be playing, and get realtime updates on Discord for when it all kicks off.
                                </p>
                            </div>

                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('user')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">Attendance Tracking</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    We provide a hassle-free way for your members to submit an absence post, giving you a good estimate of how many people will turn up.
                                </p>
                            </div>

                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('params')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">Personalised Design</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    Provide your own logo and color scheme, let users choose between light and dark mode, fully mobile ready and with localisation support.
                                </p>
                            </div>

                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('display')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">Landing Page</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    Get a modern landing page to advertise your community. Want it more unique and personal? We'll re-design it for you at a fixed price - no unnecessary charges.
                                </p>
                            </div>

                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('megaphone')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">Notifications</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    Get notified about new missions, discussions, threads and more through the browser, email, and Discord messages. Choose what suits you best.
                                </p>
                            </div>

                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('lock')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">Authentication</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    Bring your members onboard with manual verification, our quick invite links, or use your Steam group to automatically verify all member accounts.
                                </p>
                            </div>

                            <div>
                                <i class="text-5xl mb-2 inline-block w-full text-brand">@svg('bulb')</i>
                                <h2 class="text-2xl font-semibold mb-2 leading-tight">Discord Support</h2>
                                <p class="text-lg font-medium opacity-75 leading-loose">
                                    Need help with a problematic mission or just want some tips on design? We've got you covered. All day, one-to-one support on Discord until your problem is resolved.
                                </p>
                            </div>
                        </grid>
                    </div>

                    <div id="pricing" class="bg-grey-lightest py-16 px-8 xl:px-32 inline-block w-full border-t">
                        <h2 class="text-center mb-2 text-4xl">Subscription Plans</h2>

                        <p class="w-1/2 mx-auto text-center text-xl opacity-50 pb-10">Here's a rough idea of the available plans, although these will likely change a bit as we get nearer to release.</p>

                        <grid thirds gap="2rem">
                            <div>
                                <div class="bg-white rounded-lg shadow-lg">
                                    <div class="p-8">
                                        <h2 class="text-3xl font-semibold mb-4 leading-tight text-center">Starter</h2>
                                        <span class="text-center font-medium opacity-75 leading-loose mb-4 inline-block w-full">Perfect for a new group just starting up. Try it free for a month to see if it fits.</span>
                                        <span class="inline-block w-full text-center font-semibold text-5xl">
                                            <i class="roman text-lg inline-block" style="transform: translateY(-12px) translateX(5px)">&dollar;</i>
                                            10
                                            <i class="text-lg font-normal roman inline-block" style="transform: translateX(-5px)">/ month</i>
                                        </span>
                                    </div>

                                    <div class="inline-block w-full px-6 pt-6 pb-4 bg-off-white">
                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium">Full mission suite</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium">Scheduled operations</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium"><strong>1GB</strong> media storage</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium"><strong>1GB</strong> mission storage</span>
                                        </div>
                                    </div>

                                    <div class="inline-block w-full p-6 bg-white rounded-b-lg text-center">
                                        <button class="btn btn-lg btn-primary" disabled v-tooltip="'Coming Soon'">Start 1 Month Trial</button>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="bg-white rounded-lg shadow-lg">
                                    <div class="p-8">
                                        <h2 class="text-3xl font-semibold mb-4 leading-tight text-center">Growth</h2>
                                        <span class="text-center font-medium opacity-75 leading-loose mb-4 inline-block w-full">Ideal for a growing community with more and more missions each week.</span>
                                        <span class="inline-block w-full text-center font-semibold text-5xl">
                                            <i class="roman text-lg inline-block" style="transform: translateY(-12px) translateX(5px)">&dollar;</i>
                                            25
                                            <i class="text-lg font-normal roman inline-block" style="transform: translateX(-5px)">/ month</i>
                                        </span>
                                    </div>

                                    <div class="inline-block w-full px-6 pt-6 pb-4 bg-off-white">
                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium">Full mission suite</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium">Scheduled operations</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium"><strong>5GB</strong> media storage</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium"><strong>5GB</strong> mission storage</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium"><strong>Discord</strong> support</span>
                                        </div>
                                    </div>

                                    <div class="inline-block w-full p-6 bg-white rounded-b-lg text-center">
                                        <button class="btn btn-lg btn-primary" disabled v-tooltip="'Coming Soon'">Get Started</button>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="bg-white rounded-lg shadow-lg">
                                    <div class="p-8">
                                        <h2 class="text-3xl font-semibold mb-4 leading-tight text-center">Veteran</h2>
                                        <span class="text-center font-medium opacity-75 leading-loose mb-4 inline-block w-full">Unlimited storage and lots more features for the veteran community.</span>
                                        <span class="inline-block w-full text-center font-semibold text-5xl">
                                            <i class="roman text-lg inline-block" style="transform: translateY(-12px) translateX(5px)">&dollar;</i>
                                            49
                                            <i class="text-lg font-normal roman inline-block" style="transform: translateX(-5px)">/ month</i>
                                        </span>
                                    </div>

                                    <div class="inline-block w-full px-6 pt-6 pb-4 bg-off-white">
                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium">Full mission suite</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium">Scheduled operations</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium">Application management</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium">Integrated forums</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium">Attendance Tracking</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium">Group landing page</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium">Custom domain name</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium"><strong>Unlimited</strong> media storage</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium"><strong>Unlimited</strong> mission storage</span>
                                        </div>

                                        <div class="inline-block w-full">
                                            <div class="float-left mr-4 text-brand">@svg('tick')</div>
                                            <span class="font-medium"><strong>Discord</strong> support</span>
                                        </div>
                                    </div>

                                    <div class="inline-block w-full p-6 bg-white rounded-b-lg text-center">
                                        <button class="btn btn-lg btn-primary" disabled v-tooltip="'Coming Soon'">Get Started</button>
                                    </div>
                                </div>
                            </div>
                        </grid>
                    </div>

                    <div id="signup" class="bg-white py-16 px-8 xl:px-32 inline-block w-full border-t">
                        <h2 class="text-center mb-2 text-4xl">We'll let you know when it's released</h2>

                        <p class="w-1/2 mx-auto text-center text-xl opacity-50 pb-10">We're still hard at work building some of the components for the site! Sign up below to get notified when we're live.</p>

                        <signup>
                            <div slot-scope="{ signup, inputAttrs, inputEvents, error, complete }" class="w-1/3 mx-auto text-center">
                                <div v-if="!complete">
                                    <label for="signup-email">Your Email Address</label>
                                    <input id="signup-email" v-bind="inputAttrs" v-on="inputEvents" class="signup-email text-center rounded-full no-outline" type="email" placeholder="johndoe@example.com">
                                    <span class="inline-block w-full text-sm mt-2 text-brand font-medium">@{{ error }}</span>
                                    <button class="btn btn-xl btn-hero btn-primary mt-2 rounded-full" @click.prevent="signup">Sign Up</button>
                                </div>

                                <div v-else>
                                    <div class="inline-block w-2/3 text-brand">
                                        <div class="float-left mr-4">@svg('tick')</div>
                                        <span class="font-medium">Thanks for signing up!</span>
                                    </div>
                                </div>
                            </div>
                        </signup>

                        <div class="inline-block w-full mt-16 text-center text-xs opacity-50 font-medium">
                            Designed by <a href="https://smallstone.uk" class="underline" target="_newtab">James Kingsley</a>
                        </div>

                        <div class="inline-block w-full mt-1 text-center text-xs opacity-50 font-medium">
                            &copy; {{ now()->year }} Small Stone. All rights reserved.
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
