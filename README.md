	         _______         ___________          ___
	       __\___   \_  ____/     /\   /______ ___\_/__            /\
	      /    \|     \/  _ \    /--\_____    \\   /  /\          /  \
	    _/      |     /    \     \      |/     /      \ \ _ _____/    \_______
	    \       |_____\____/     /      /      \____  /\/                    /
	     \______|      \  \_____/\______       /\   \/  \   /\NSILOVE 1.12  /____ _
	      \     |_______\__\___ \ \    \      /  \___\__/____
	       \____|        /____/\_\/\__ /     / __/___ \     /\    ____
	                     \    \ \     /     /_/ __   \/    /__\__/  _/ _____ ___
	                 /\   \____\/    /     //   \    /    /    /    _>/    //__/\
	                /  \           _/      \   //   /    /    /     \/    / \__\/
	_ _________    /    \_______ _ \___    /_______/    /   _/ \____      \  /
	           \  /                 \ \___/\       \_______/\\  \  \______/\/
	            \/                   \_\  \ \_______\      \ \\/ \__\     \ \
	                                    \__\/        \______\/ h7/dS!\_____\/

## Description

Ansilove is a set of tools to convert ANSi and artscene-related file formats
into PNG images, supporting ANSi (.ANS), PCBOARD (.PCB), BiNARY (.BIN), ADF
(.ADF), iDF (.IDF), TUNDRA (.TND) and XBiN (.XB) formats.

```
Ansilove/PHP is now deprecated, version 1.12 will be the last release.

Users are encouraged to migrate to Ansilove/C which replaces the command line
converter, and to Ansilove.js for doing "on the fly" conversions on web pages.
```

It includes an all purposes command line converter, along with a library to
use on web pages for doing "on the fly" conversions. It creates size optimized
4-bit PNG files and supports SAUCE (Standard Architecture for Universal Comment
Extentions), 80x25 and 80x50 PC fonts (including all the 14 MS-DOS charsets
and some unofficial ones), Amiga fonts, and iCE colors.

It is written in PHP, and can thus be run on any supported system: the
command line converter can be used under Linux, Mac OS X, Windows, and so
far and so on.

Ansilove doesn’t require any Web server: you can use the bundled command
line converter to convert files locally on your computer.

## Features

- ANSi (.ANS) format support
- PCBOARD (.PCB) format support
- BiNARY (.BIN) format support
- ADF (.ADF) format support (Artworx)
- iDF (.IDF) format support (iCE Draw)
- TUNDRA (.TND) format support
- XBiN (.XB) format support
- Small output file size (4-bit PNG)
- SAUCE (Standard Architecture for Universal Comment Extentions)
- 80x25 font support
- 80x50 font support
- Amiga font support
- iCE colors support

## Supported charsets

- IBM PC (Code page 437)
- Baltic (Code page 775)
- Cyrillic (Code page 855)
- French Canadian (Code page 863)
- Greek (Code pages 737 and 869)
- Hebrew (Code page 862)
- Icelandic (Code page 861)
- Latin-1 (Code page 850)
- Latin-2 (Code page 852)
- Nordic (Code page 865)
- Portuguese (Code page 860)
- Russian (Code page 866)
- Turkish (Code page 857)
- Armenian
- Persian (Iran System encoding standard)

## License

Ansilove is released under the BSD 2-Clause license. See `LICENSE` file for
details.

## Author

Ansilove is developed by Frederic Cambus.

- Site: https://www.cambus.net

## Resources

Project Homepage: https://www.ansilove.org

Sister project: https://www.ascii-codes.com
