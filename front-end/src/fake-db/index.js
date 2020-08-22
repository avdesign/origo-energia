import mock from './mock'

import "./data/data-plan/index.js"

mock.onAny().passThrough(); // forwards the matched request over network
