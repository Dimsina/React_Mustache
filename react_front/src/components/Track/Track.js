import React from 'react'
import { Switch, Route } from 'react-router-dom'
import Track_ById from './Track_ById'
import Track_Roster_All from './Track_Roster_All'

const Track = () => (
	<Switch>
		<Route exact path='/track' component={Track_Roster_All}/>
		<Route exact path='/track/page/:page' component={Track_Roster_All}/>
		<Route path='/track/:id' component={Track_ById}/>
	</Switch>
);

export default Track;