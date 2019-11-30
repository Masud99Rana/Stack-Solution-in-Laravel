import { config, library, dom } from '@fortawesome/fontawesome-svg-core'

config.autoReplaceSvg = 'nest'

import { faCaretUp, faCaretDown, faStar, faCheck } from '@fortawesome/free-solid-svg-icons'

library.add(faCaretUp, faCaretDown, faCheck, faStar);

// Kicks off the process of finding <i> tags and replacing with <svg>
dom.watch()