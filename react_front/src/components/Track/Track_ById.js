import React from 'react';

class Track_ById extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			error: null,
			isLoaded: false,
			items: [],
			id : this.props.match.params.id
		};
	}

	componentDidMount() {
		fetch(`http://localhost/api/tracks/read_one.php?id=${this.state.id}`)
			.then(res => res.json())
			.then(
				(result) => {
					alert(result);
					this.setState({
						isLoaded: true,
						items : result
					});
				},
				(error) => {
					this.setState({
						isLoaded: true,
						error
					});
				}
			)
	}

	render() {
		const { error, isLoaded, items } = this.state;
		if (error) {
			return <div>Error: {error.message}</div>;
		} else if (!isLoaded) {
			return <div>Loading...</div>;
		} else {
			console.log(items);
			return (
				<ul>
					{items.map(track => (
						<li	 key={track.id}>
							<p>Name : <br/> {track.name}</p>
							<p>Album : <br/> {track.album}</p>
							<p>Artist : <br/> {track.artist}</p>
							<p>Track No : <br/> {track.track_no}</p>
							<p>duration : <br/> {track.duration} </p>
							<p>Release Date : <br/> {track.release_date} </p>
							<audio controls="controls">
								<source src={track.mp3} type="audio/mpeg"/>
							</audio>
							<br/>
						</li>
					))}
				</ul>
			);
		}
	}
}

export default Track_ById;